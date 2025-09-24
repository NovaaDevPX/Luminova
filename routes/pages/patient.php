<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::prefix('patient')->as('patient.')->group(function () {
    Route::get('/', [PatientController::class, 'index'])->name('index');
});
