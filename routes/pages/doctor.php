<?php

use App\Http\Controllers\Auth\DoctorAuthController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DoctorController::class, 'index'])->name('home');

Route::prefix('doctor')->as('doctor.')->group(function () {
    Route::middleware(['doctor'])->group(function () {
        Route::prefix('dashboard')->as('dashboard.')->group(function () {
            Route::get('/', [DoctorController::class, 'dashboard'])->name('index');
            Route::get('/appointments', [DoctorController::class, 'appointments'])->name('appointments');
            Route::get('/patients', [DoctorController::class, 'patients'])->name('patients');
            Route::get('/reviews', [DoctorController::class, 'reviews'])->name('reviews');
        });

        // Auth

        Route::get('/login', [DoctorAuthController::class, 'login'])->name('login');
        Route::post('/login', [DoctorAuthController::class, 'authenticate'])->name('authenticate');
        Route::post('/logout', [DoctorAuthController::class, 'logout'])->name('logout');
    });

    include_once 'appointment.php';
});
