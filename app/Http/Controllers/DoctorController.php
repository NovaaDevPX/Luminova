<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return view('doctor.index');
    }

    public function allDoctor()
    {
        $doctors = collect([
            (object)[
                'id' => 1,
                'name' => 'dr. Ade Nova Wiguna',
                'specialist' => 'Dokter Hewan',
                'description' => 'Dokter hewan berpengalaman dalam merawat kucing, anjing, dan hewan peliharaan lainnya dengan pendekatan ramah dan profesional.',
                'rating' => 4.8,
                'reviews_count' => 120,
                'image' => 'doctors/ade-nova.jpg',
            ],
            (object)[
                'id' => 2,
                'name' => 'dr. Siti Rahmawati',
                'specialist' => 'Spesialis Anak',
                'description' => 'Membantu tumbuh kembang anak dengan penuh perhatian serta memberikan konsultasi kesehatan anak yang menyeluruh.',
                'rating' => 4.6,
                'reviews_count' => 95,
                'image' => 'doctors/siti-rahmawati.jpg',
            ],
            (object)[
                'id' => 3,
                'name' => 'dr. Budi Santoso',
                'specialist' => 'Dokter Gigi',
                'description' => 'Spesialis perawatan gigi dengan pengalaman lebih dari 10 tahun dalam memberikan pelayanan terbaik kepada pasien.',
                'rating' => 4.9,
                'reviews_count' => 150,
                'image' => 'doctors/budi-santoso.jpg',
            ],
        ]);

        return view('doctor.all-doctor', compact('doctors'));
    }

    public function dashboard()
    {
        return view('doctor.dashboard.index');
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
