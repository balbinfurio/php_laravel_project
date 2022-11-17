<?php

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
    return view('welcome'); //welcome es el nombre del archivo alojado en resources/views 
});

Route::get('/test', function () {
    return 'Decilo!';
});

Route::get('/formato_json', function() {
    return [
        'saludo' => 'Hola',
        'nombre' => 'Furio'
    ];
});

Route::get('/exe1', function() {
    return view('exe1');
});