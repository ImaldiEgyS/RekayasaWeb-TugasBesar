<?php

namespace App\Http\Controllers;

use App\Memory;
use Illuminate\Http\Request;

class MemoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $memory = Memory::all();
        return view('admin.produk.memory', compact('memory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'spec' => 'required',
            'price' => 'required',
            'images' => 'required'
        ]);

        Memory::create($request->all());
        return redirect('/admin/memory')->with('status', 'Insert Data Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function show(Memory $memory) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function edit(Memory $memory) {
        return view('admin.produk.update', compact('memory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Memory $memory) {
        $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'spec' => 'required',
            'price' => 'required',
            'images' => 'required'
        ]);

        Memory::where('id', $memory->id)
            -> update([
                'brand' => $request->brand,
                'type' => $request->type,
                'spec' => $request->spec,
                'price' => $request->price,
                'images' => $request->images
            ]);

        return redirect('/admin/memory')->with('status', 'Data Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Memory $memory) {
        Memory::destroy($memory->id);
        return redirect('/admin/memory')->with('status', 'Data Deleted!');
    }
}
