<?php

namespace App\Http\Controllers\datos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carpetas;
use App\Models\Cajas;

class Caja extends Controller
{
    public function index(){
        $var=Carpetas::all();
        return view('caja.caja', compact('var'));
    } 

    public function  registro(Request $request)
    {   
        $category = new Cajas();
        $category->numero = $request->input('num');
        $category->idcarpeta = $request->input('titulo');
        $category->save();
        return redirect()->route('caja');
    } 

}
