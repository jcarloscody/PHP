<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/empresa', function () {
    return view('static/empresa');
});

Route::any('qualquer', function () {
    return "Permite todo tipo de verbo http";
});


Route::match(['get', 'post'], 'match', function () {
    return "Permite tipos de acessos restritos ao array de verbos";
});


Route::get('getId/{id}/{nome?}', function ($id, $nome="") {
    return "O id usado na rota get foi " . $id . " " . $nome; 
});