<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\DoctorReview;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctor = Doctor::first();
        $user = User::first();

        if ($doctor && $user) {
            DoctorReview::create([
                'user_id' => $user->id,
                'doctor_id' => $doctor->id,
                'rating' => 5,
                'comment' => 'Very professional and helpful!'
            ]);

            DoctorReview::create([
                'user_id' => $user->id,
                'doctor_id' => $doctor->id,
                'rating' => 4,
                'comment' => 'Good doctor, explained everything clearly.'
            ]);
        }
    }
}
