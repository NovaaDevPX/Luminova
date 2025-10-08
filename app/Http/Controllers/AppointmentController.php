<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index($id)
    {

        $doctor = Doctor::where('id', $id)->with('specialization', 'reviews.user')->first();

        // dd($doctor);
        return view('patient.booking-doctor', compact('doctor'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'appointment_date' => 'required|date',
            'message' => 'nullable|string',
        ]);

        Appointment::create([
            'doctor_id' => $validated['doctor_id'],
            'patient_name' => $validated['name'],
            'patient_email' => $validated['email'],
            'appointment_date' => $validated['appointment_date'],
            'message' => $validated['message'] ?? null,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Janji temu berhasil dibuat!');
    }
}
