<?php

namespace App\Http\Controllers\datos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Informacion extends Controller
{
    public function index(){
        return view('informacion.historia');
    } 
}
