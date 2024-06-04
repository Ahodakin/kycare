<?php

use App\Http\Controllers\Home\HomeController;

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;

use App\Http\Controllers\AvailabilityController;
// Route::prefix('kycare')->name('home.')->group(function () {
// Route::get('/', [HomeController::class, 'index'])->name('index');
// Route::get('/about', [HomeController::class, 'about'])->name('about');
// Route::get('/services', [HomeController::class, 'service'])->name('services');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'service')->name('services');
    Route::get('/choix', 'choix')->name('choix');
    Route::get('/mon-compte', 'compte')->name('mon-compte');
    Route::get('/paquets', 'paquets')->name('paquets');
    Route::get('/paiement', 'paiement')->name('paiement');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/Register', 'create')->name('Register');
    Route::post('/Register', 'store')->name('Register');

    Route::get('Login','showLoginForm')->name('Login');
    Route::post('login', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout');
});



Route::controller(ProfileController::class)->middleware(['auth'])->group(function () {

    Route::get('/profile', 'show')->name('profile');
    Route::get('/profile/edit', 'edit')->name('profile.edit');
    Route::put('/profile/update', 'update')->name('profile.update');
    Route::put('/profile/update_picture', 'updatePicture')->name('profile.update_picture');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'create'])->name('appointments.index');
    Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
});


Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
Route::get('/doctors/{doctor}', [DoctorController::class, 'show'])->name('doctors.show');
// Route::get('/dashboard', [DoctorController::class, 'index'])->name('dashboard');
Route::post('/manage-availability', [AvailabilityController::class,'store'])->name('availability.store');


Route::middleware(['auth'])->group(function () {
    Route::get('/availabilities', [AvailabilityController::class, 'index'])->name('availabilities.index');
    Route::get('availabilities/create', [AvailabilityController::class, 'create'])->name('availabilities.create');
    Route::post('availabilities', [AvailabilityController::class, 'store'])->name('availabilities.store');
    Route::get('availabilities/{availability}/edit', [AvailabilityController::class, 'edit'])->name('availabilities.edit');
    Route::put('availabilities/{availability}', [AvailabilityController::class, 'update'])->name('availabilities.update');
    Route::delete('availabilities/{availability}', [AvailabilityController::class, 'destroy'])->name('availabilities.destroy');
});
