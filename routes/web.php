<?php
use App\Http\Controllers\Home\HomeController;

use Illuminate\Support\Facades\Route;


Route::prefix('kycare')->name('home.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/services', [HomeController::class, 'service'])->name('services');
});

// Route::controller(HomeController::class)->group(function (){
//     Route::get('/', 'index')->name('index');
// });