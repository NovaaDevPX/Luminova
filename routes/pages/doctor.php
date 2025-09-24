<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DoctorController::class, 'index'])->name('index');
Route::prefix('doctor')->as('doctor.')->group(function () {
    Route::get('/all-doctor', [DoctorController::class, 'allDoctor'])->name('all-doctor');
});
