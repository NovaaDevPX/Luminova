<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PatientController::class, 'index'])->name('index');
Route::prefix('patient')->as('patient.')->group(function () {});
