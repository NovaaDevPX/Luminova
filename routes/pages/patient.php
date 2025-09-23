<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::prefix('doctor')->as('doctor.')->group(function () {
    Route::get('/', [DoctorController::class, 'index'])->name('index');
});
