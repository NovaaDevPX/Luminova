<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSpecialization;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('patient.index');
    }

    public function aboutWe()
    {
        return view('patient.about-we');
    }

    public function contactWe()
    {
        return view('patient.contact-we');
    }

    public function allDoctor()
    {

        $doctors = Doctor::with('specialization', 'reviews')
            ->withCount('reviews')
            ->get();
        $specializations = DoctorSpecialization::all();

        return view('doctor.all-doctor', compact('doctors', 'specializations'));
    }
}
