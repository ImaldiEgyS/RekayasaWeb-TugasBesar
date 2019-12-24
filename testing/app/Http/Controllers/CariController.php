<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Crud;

class CariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = $request->get('products');
        $hasil = Crud::where('product', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('result', compact('hasil', 'query'));
    }
}