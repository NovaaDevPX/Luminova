<?php

namespace Database\Seeders;

use App\Models\Appointment;
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
        // Ambil appointment yang sudah selesai
        $completedAppointments = Appointment::where('status', 'completed')->get();

        if ($completedAppointments->isEmpty()) {
            $this->command->warn('Tidak ada appointment dengan status completed. Jalankan AppointmentSeeder terlebih dahulu atau ubah salah satunya menjadi completed.');
            return;
        }

        foreach ($completedAppointments as $appointment) {
            DoctorReview::create([
                'user_id' => $appointment->user_id,
                'doctor_id' => $appointment->doctor_id,
                'appointment_id' => $appointment->id,
                'rating' => fake()->numberBetween(1, 5),
                'comment' => fake()->sentence(10),
            ]);
        }
    }
}
