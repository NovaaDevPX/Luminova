<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

Route::prefix('appointment')->as('appointment.')->group(function () {
    Route::get('/{id}', [AppointmentController::class, 'index'])->name('index');
    Route::post('/store', [AppointmentController::class, 'store'])->name('store');
});
