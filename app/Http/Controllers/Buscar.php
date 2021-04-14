<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titular;
use App\Models\Predios;
use App\Models\Sucesores;

class Buscar extends Controller
{
    public function index(){

        $tit=Titular::where('nombres', '=', 'yani');
        $su = Sucesores::where('nombres', '=', 'yani');
        $cedula=Titular::where('cedula', '=', 1);    
        $suc=Sucesores::where('cedula', '=', 1);      
        return view('buscar.buscar', compact('tit', 'su', 'cedula', 'suc'));
    } 

    public function bustitular(Request $request ){
             $nombre = $request->input('busqueda');
             $nom = $request->input('sucesor');
             $c = $request->input('ced');
             $ced = $request->input('cedulasus');

             $tit=Titular::where('nombres', '=', $nombre)->join('predio', 'titular.id', 'predio.idtitular')->get();
             $su=Sucesores::where('nombres', '=', $nom)->join('predio', 'sucesor.id', 'predio.idsucesor')->get();
             $cedula=Titular::where('cedula', '=', $c)->join('predio', 'titular.id', 'predio.idtitular')->get();
             $suc=Sucesores::where('cedula', '=', $ced)->join('predio', 'sucesor.id', 'predio.idsucesor')->get();
             return view('buscar.buscar', compact('tit', 'su', 'cedula', 'suc'));      
    }

}
