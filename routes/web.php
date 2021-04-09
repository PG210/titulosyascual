<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datos\Informacion;
use App\Http\Controllers\datos\Titulares;
use App\Http\Controllers\datos\Sucesor;
use App\Http\Controllers\datos\Vereda;
use App\Http\Controllers\datos\Predio;
use App\Http\Controllers\datos\Carpeta;
use App\Http\Controllers\datos\Caja;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('titulos/historia', [Informacion::class, 'index'])->name('historia');

Route::get('/', function () {
    return view('welcome');
});
//registro titulares
Route::get('titulos/registro/titulares', [Titulares::class, 'index'])->name('titular');
//registro sucesor
Route::get('titulos/registro/sucesores', [Sucesor::class, 'index'])->name('sucesor');
//registro vereda
Route::get('titulos/registro/vereda', [Vereda::class, 'index'])->name('vereda');
//registro vereda
Route::get('titulos/registro/predio', [Predio::class, 'index'])->name('predio');
//registro carpeta
Route::get('titulos/registro/carpeta', [Carpeta::class, 'index'])->name('carpeta');
//registro caja
Route::get('titulos/registro/caja', [Caja::class, 'index'])->name('caja');
//rot de fomulario registro titulares 
Route::post('titulos/registro/titular/formulario', [Titulares::class, 'registro'])->name('registitular');
//rot de fomulario registro sucesores
Route::post('titulos/registro/sucesor/formulario', [Sucesor::class, 'registro'])->name('regissucesor');
//rot de fomulario registro veredas
Route::post('titulos/registro/vereda/formulario', [Vereda::class, 'registro'])->name('regisvereda');
//rot de fomulario registro predios
Route::post('titulos/registro/predio/formulario', [Predio::class, 'registro'])->name('regispredio');
//rot de fomulario registro carpeta
Route::post('titulos/registro/carpeta/formulario', [Carpeta::class, 'registro'])->name('regiscarpeta');
//rot de fomulario registro carpeta
Route::post('titulos/registro/caja/formulario', [Caja::class, 'registro'])->name('regiscaja');
//visualizar titulos
Route::get('titulos/visualizar/predios', [Predio::class, 'visualizar'])->name('titulos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
