<?php

namespace App\Http\Controllers;

use App\Admin;
use DataTables;
use Illuminate\Http\Request;

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
        
        $model = Admin::create($request->all());
        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin) {
        //
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
