<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeController::class);

Route::controller(PersonaController::class)->group(function () {
    Route::get('persona', 'index');
    Route::get('persona/crear', 'create');
    Route::get('persona/actualizar', 'update');
    Route::get('persona/eliminar/{persona}','remove');
});