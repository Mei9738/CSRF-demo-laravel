<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProfileController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'index']); // Home page
Route::get('/about', [HomeController::class, 'about']); // Educational section
// Route::get('/demo', [DemoController::class, 'index']); // Interactive demo page
// Route::post('/demo/unprotected', [DemoController::class, 'unprotected']); // Unprotected form   
// Route::post('/demo/protected', [DemoController::class, 'protected']); // Protected form   

// Vulnerable Form
// Route::get('/profile-vulnerable', function () {
//     return view('profile-vulnerable');
// });

// Route::post('/profile-vulnerable', function () {
//     return "Profile updated without CSRF protection!";
// });

Route::get('/test-csrf', function () {
    return view('test-csrf');
});
