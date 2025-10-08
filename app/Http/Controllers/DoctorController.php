<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\DoctorReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index()
    {
        return view('doctor.index');
    }

    public function dashboard()
    {

        $doctor_id = Auth::guard('doctor')->id();

        $appointments = Appointment::where('doctor_id', $doctor_id)->with(['patient', 'doctor'])->latest()->get();
        $all_appointments = count($appointments);
        $unique_patients = $appointments->unique('user_id')->count();
        $average_rating = DoctorReview::where('doctor_id', $doctor_id)->avg('rating');

        return view('doctor.dashboard.index', compact(['appointments', 'all_appointments', 'unique_patients', 'average_rating']));
    }

    public function appointments()
    {
        return view('doctor.dashboard.appointments');
    }

    public function patients()
    {
        return view('doctor.dashboard.patients');
    }

    public function reviews()
    {
        return view('doctor.dashboard.reviews');
    }
}
