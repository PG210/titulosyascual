<?php

namespace App\Http\Controllers\datos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Titular;
use App\Models\Documento;

class Titulares extends Controller
{
    public function index(){
        $var=Documento::all();
        $ti=Titular::join('tipodocumento', 'idtipodocumento', '=', 'tipodocumento.id')->get();
       return view('titulares.registro', compact('var', 'ti'));
    } 

    public function  registro(Request $request)
    {   
        $category = new Titular();
        $category->idtipodocumento = $request->input('idoc');
        $category->cedula = $request->input('cedula');
        $category->nombres = $request->input('nombre');
        $category->apellidos = $request->input('apellido');
        $category->direccion = $request->input('dir');
        $category->telefono = $request->input('tel');
        $category->save();
        //return redirect()->route('actucliente');
    } 
}
