<?php

namespace App\Http\Controllers\datos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Predios;
use App\Models\Carpetas;

class Carpeta extends Controller
{
    public function index(){
        $var=Predios::all();
        return view('carpeta.carpeta', compact('var'));
    } 
    public function  registro(Request $request)
    {   
        $category = new Carpetas();
        $category->numero = $request->input('num');
        $category->idtitulo = $request->input('titulo');
        $category->save();
        return redirect()->route('carpeta');
    } 

}
