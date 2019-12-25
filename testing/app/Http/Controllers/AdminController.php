<?php

namespace App\Http\Controllers;

use App\Admin;
use DataTables;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\File;
// use Validator,Redirect,Response,File;

class AdminController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $model = new Admin;
        return view('admin.layouts.form', compact('model'));
        // return view('admin.layouts.formcreate', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'merek' => 'required|string|max:255',
            'seri' => 'required|string|max:255',
            'socket' => 'required|string|max:255',
            'spek' => 'string|max:255',
            'gambar' => 'string|max:255',
            'harga' => 'int',
            'katalog' => 'required|string|max:255'
        ]);
        
        // $this->validate($request, [
        //     'gambar' => 'required|image',
        // ]);
        
        // $photos = $request->file('gambar');
        // $imageName = 'img.'.$photos->getClientOriginalExtension();
        // $request->gambar->move(public_path('img'), $imageName);

        // $model = new Admin();
        // $model->merek = $request->merek;
        // $model->seri = $request->seri;
        // $model->socket = $request->socket;
        // $model->spek = $request->spek;
        // $model->gambar = $imageName;
        // $model->harga = $request->harga;
        // $model->katalog = $request->katalog;

        // $model->save();

        $model = Admin::create($request->all());
        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $model = Admin::findOrFail($id);
        return view('admin.layouts.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    // public function edit(Admin $admin) {
    //     //
    // }

    public function edit($id) {
        $model = Admin::findOrFail($id);
        return view('admin.layouts.form', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'merek' => 'required|string|max:255',
            'seri' => 'required|string|max:255',
            'socket' => 'required|string|max:255',
            'spek' => 'string|max:255',
            'gambar' => 'string|max:255',
            'harga' => 'int',
            'katalog' => 'required|string|max:255'
        ]);
        
        $model = Admin::findOrFail($id);
        $model->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $model = Admin::findOrFail($id);
        $model->delete();
    }

    public function dataTable() {
        $model = Admin::query();
        return DataTables::of($model)
            ->addColumn('action',function($model) {
                return view('admin.layouts._action', [
                    'model' => $model,
                    'url_show' => route('admin.show', $model['id']),
                    'url_edit' => route('admin.edit', $model['id']),
                    'url_destroy' => route('admin.destroy', $model['id']),
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
