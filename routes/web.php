<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CSRFController;
use Illuminate\Http\Request;

//csrf intro
Route::get('/csrf-intro', [CSRFController::class, 'intro'])->name('csrf.intro');


// Route::post('/profile-vulnerable', function (Request $request) {
//     // This route will fail with a 419 error because no CSRF token is provided.
//     return "Vulnerable Form Submitted: " . $request->input('name');
// });
Route::post('/profile-vulnerable', [ProfileController::class, 'submitVulnerableForm']);


// Route::post('/profile-protected', function (Request $request) {
//     // This route will succeed because the @csrf token is included.
//     return "Protected Form Submitted: " . $request->input('name');
// });
Route::post('/profile-protected', [ProfileController::class, 'submitProtectedForm']);


Route::post('/profile-unprotected', function (Request $request) {
    // This route will fail with a 419 error unless you bypass CSRF checks.
    return "Unprotected Profile Submitted: " . $request->input('name');
});


Route::get('/test-csrf', function () {
    return view('test-csrf');
});


Route::get('/csrf-demo', function () {
    // Get the step parameter from the request, defaulting to 1
    $step = request('step', 1); // Default to scene 1 if no step is provided
    
    $user1 = App\Models\Demo::find(1);
    $user2 = App\Models\Demo::find(2);
    
    if (!$user1 || !$user2 ) {
        return redirect()->route('csrf.demo')->with('error', 'User data not found.');
    }

    // Return the view with the demo data and step
    return view('csrf-demo', ['step' => $step, 'user1' => $user1,'user2' => $user2 ]);
})->name('csrf.demo');


Route::post('/csrf-demo', [CSRFController::class, 'showScene']);



