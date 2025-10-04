<?php

use App\Http\Controllers\Auth\DoctorAuthController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DoctorController::class, 'index'])->name('index');

Route::get('/doctor/login', [DoctorAuthController::class, 'login'])->name('doctor.login');
Route::post('/doctor/login', [DoctorAuthController::class, 'authenticate'])->name('doctor.authenticate');
Route::post('/doctor/logout', [DoctorAuthController::class, 'logout'])->name('doctor.logout');

Route::prefix('doctor')->as('doctor.')->group(function () {
    Route::middleware('auth:doctor')->group(function () {
        Route::get('/all-doctor', [DoctorController::class, 'allDoctor'])->name('all-doctor');

        Route::prefix('dashboard')->as('dashboard.')->group(function () {
            Route::get('/', [DoctorController::class, 'dashboard'])->name('index');
            Route::get('/appointments', [DoctorController::class, 'appointments'])->name('appointments');
            Route::get('/patients', [DoctorController::class, 'patients'])->name('patients');
            Route::get('/reviews', [DoctorController::class, 'reviews'])->name('reviews');
        });
    });
});
