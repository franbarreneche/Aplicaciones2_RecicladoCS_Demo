<?php

use App\Controllers\CentrosController;
use App\Controllers\CiudadanoController;
use App\Controllers\UsuarioController;
use App\Views\DashboardVista;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('login',[UsuarioController::class,'mostrarVistaLogin'])->name('login');

Route::post('login',[UsuarioController::class,'login'])->name('login');
Route::post('logout',[UsuarioController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('dashboard',function(Request $request) {
        return (new DashboardVista($request))->actualizar();
    })->name('dashboard');
    Route::get('ciudadanos',[CiudadanoController::class,'listarTodosCiudadanos'])->name('ciudadanos.lista');
    Route::get('ciudadanos/{idCiudadano}/centros',[CiudadanoController::class,'mostrarCentrosDondeColabora'])->name('ciudadanos.centros');
    Route::get('centros',[CentrosController::class,'listarTodosCentros'])->name('centros.lista');
    Route::get('centros/{idCentro}/reciclados',[CentrosController::class,'mostrarRecicladosEnCentro'])->name('centros.reciclados');
});




