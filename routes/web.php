<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'index']); // Home page
Route::get('/about', [HomeController::class, 'about']); // Educational section
Route::get('/demo', [DemoController::class, 'index']); // Interactive demo page
Route::post('/demo/unprotected', [DemoController::class, 'unprotected']); // Unprotected form   
Route::post('/demo/protected', [DemoController::class, 'protected']); // Protected form   
