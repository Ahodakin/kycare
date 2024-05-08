<?php
use App\Http\Controllers\Home\HomeController;

use App\Http\Controllers\Auth\AuthPatientController;
use App\Http\Controllers\Auth\AuthPraticienController;
use Illuminate\Support\Facades\Route;


// Route::prefix('kycare')->name('home.')->group(function () {
    // Route::get('/', [HomeController::class, 'index'])->name('index');
    // Route::get('/about', [HomeController::class, 'about'])->name('about');
    // Route::get('/services', [HomeController::class, 'service'])->name('services');
// });

Route::controller(HomeController::class)->group(function (){
    Route::get('/', 'index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/services','service')->name('services');
    Route::get('/choix','choix')->name('choix');
});


Route::controller(AuthPatientController::class)->group(function (){
    // Route::get('/LoginPatient','LoginPatient')->name('LoginPatient');
    Route::get('/RegisterPatient','RegisterPatient')->name('RegisterPatient'); 
});

Route::controller(AuthPraticienController::class)->group(function (){
    Route::get('/Login','Login')->name('Login');
    Route::get('/RegisterPraticien','RegisterPraticien')->name('RegisterPraticien');
});
