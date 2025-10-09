<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::prefix('patient')->as('patient.')->group(function () {
    Route::get('/', [PatientController::class, 'index'])->name('index');
    Route::get('/about-we', [PatientController::class, 'aboutWe'])->name('about-we');
    Route::get('/contact-we', [PatientController::class, 'contactWe'])->name('contact-we');
    Route::get('/thanks-booking', [PatientController::class, 'thanksBooking'])->name('thanks-booking');

    Route::get('/booking-doctor', [PatientController::class, 'bookingDoctor'])->name('booking-doctor');
    Route::get('/all-doctor', [PatientController::class, 'allDoctor'])->name('all-doctor');
});
