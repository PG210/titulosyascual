<?php

namespace App\Http\Controllers\datos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Veredas;

class Vereda extends Controller
{
    public function index(){
        $ver=Veredas::all();
        return view('vereda.vereda', compact('ver'));
    }

    public function  registro(Request $request)
    {   
        $category = new Veredas();
        $category->descripcion = $request->input('des');
        $category->save();
        return redirect()->route('vereda');
    } 

}
