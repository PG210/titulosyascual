<?php

namespace App\Http\Controllers\datos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Titular;
use App\Models\Sucesores;
use App\Models\Veredas;
use App\Models\Predios;
use App\Models\Carpetas;
use App\Models\Cajas;

class Predio extends Controller
{
    public function index(){
        $var=Titular::all();
        $s=Sucesores::all();
        $vereda=Veredas::all();
        $pre=Predios::all();
        return view('predio.predio', compact('var', 's', 'vereda', 'pre'));
    } 

    public function  registro(Request $request)
    {   
      //  dd($request);//verificar carpetas
        $category = new Predios();
        $category->numero= $request->input('num');
        $category->nombre = $request->input('nom');
        $category->idtitular = $request->input('titular');
        $category->idsucesor = $request->input('sucesor');
        $category->idvereda = $request->input('vereda');
        if($request->hasFile('uploadedfile')){
                    
                $file = $request->file('uploadedfile');//guarda la variable id en un file
                $val = "zip_titulo".time().".".$file->guessExtension();//renombra el archivo subido
                $ruta = public_path("pdf/".$val);//ruta para guardar el archivo pdf/ es la carpeta

                if($file->guessExtension()=="zip"){
                   copy($file, $ruta);//ccopia el archivo de una ruta cualquiera a donde este
                }
                else{
                    dd("no es un archivo zip");
                }
        }
        $category->archivo = $val;//ingresa el nombre de la ruta a la base de datos 
        $category->save();//guarda los datos 
        return redirect()->route('predio');
    } 
    public function visualizar(){
        $tit=Cajas::join('carpeta', 'idcarpeta', '=', 'carpeta.id')
                   ->join('predio', 'idtitulo', '=', 'predio.id')
                   ->join('titular', 'idtitular', '=', 'titular.id')
                   ->join('sucesor', 'idsucesor', '=', 'sucesor.id')
                   ->join('vereda', 'idvereda', '=', 'vereda.id')
                  // ->join('tipodocumento', 'idtipodocumento', '=', 'tipodocumento.id')
                   ->select('caja.numero as cajanum', 'carpeta.numero as carnum', 'predio.id as iden',
                    'predio.nombre as nompre', 'predio.numero as numpre', 'predio.archivo', 'titular.cedula as titced',
                     'titular.nombres as titnom',
                    'titular.apellidos as titape', 'sucesor.cedula as suced', 
                    'sucesor.nombres as sunom', 'sucesor.apellidos as suape',
                    'sucesor.cedula as suced',  'vereda.descripcion')
                    ->get();
        //$vereda=Veredas::all();
       return view('predio.vistitulos', compact('tit'));
    } 

    public function descarga($file_name){//sirve para descargar un archivo 
        $file_path = public_path('pdf/'.$file_name);
        return response()->download($file_path);
    }
    

}
