<?php

use App\Http\Controllers\UsuarioController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('login',function() {
    return view('login');
})->name('login');

Route::post('login',[UsuarioController::class,'login'])->name('login');
Route::post('logout',[UsuarioController::class,'logout'])->name('logout');
