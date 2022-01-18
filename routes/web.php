<?php

use App\Http\Controllers\CalculadoraController;
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
    return view('welcome');
});

Route::get('/act', function () {
    return view('act');
});

Route::get('/pokemon/{name}', function ($name) {
    return view('pokemon', compact('name'));
});

Route::get('/calculadora', [CalculadoraController::class, 'index']);
Route::post('/calcular', [CalculadoraController::class, 'calcular']);
