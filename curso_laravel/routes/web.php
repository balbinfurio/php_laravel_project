<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']); 


// Route::get('/formato_json', function() {
//     return [
//         'saludo' => 'Hola',
//         'nombre' => 'Furio'
//     ];
// });

// Route::get('/carpeta_anidada/archivo_anid', function() {
//     return view('carpeta_anidada.archivo_anid'); // ejemplo con carpeta y archivo anidados
// });

// Route::get('/test', function() {
//     return view('test', [
        
//     ]);
// });