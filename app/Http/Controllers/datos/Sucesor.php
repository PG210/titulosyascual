<?php

namespace App\Http\Controllers\datos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sucesores;
use App\Models\Documento;

class Sucesor extends Controller
{
    public function index(){
        $var=Documento::all();
        $su=Sucesores::join('tipodocumento', 'idtipodocumento', '=', 'tipodocumento.id')->get();
       return view('sucesor.sucesor', compact('var', 'su'));
    } 
    public function  registro(Request $request)
    {   
        $category = new Sucesores();
        $category->idtipodocumento = $request->input('documento');
        $category->cedula = $request->input('cedula');
        $category->nombres = $request->input('nombre');
        $category->apellidos = $request->input('apellido');
        $category->direccion = $request->input('dir');
        $category->telefono = $request->input('tel');
        $category->save();
        return redirect()->route('sucesor');
    } 

}
