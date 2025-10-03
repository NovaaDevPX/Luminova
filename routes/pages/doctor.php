<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DoctorController::class, 'index'])->name('index');
Route::prefix('doctor')->as('doctor.')->group(function () {
    Route::get('/all-doctor', [DoctorController::class, 'allDoctor'])->name('all-doctor');

    Route::prefix('dashboard')->as('dashboard.')->group(function () {
        Route::get('/', [DoctorController::class, 'dashboard'])->name('index');
        Route::get('/appointments', [DoctorController::class, 'appointments'])->name('appointments');
        Route::get('/patients', [DoctorController::class, 'patients'])->name('patients');
        Route::get('/reviews', [DoctorController::class, 'reviews'])->name('reviews');
    });
});
