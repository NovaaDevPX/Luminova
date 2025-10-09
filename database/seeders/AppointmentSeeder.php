<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\DoctorReview;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = Doctor::all();
        $users = User::all();

        if ($doctors->isEmpty() || $users->isEmpty()) {
            $this->command->warn('❌ Tidak ada data dokter atau user. Jalankan DoctorSeeder dan UserSeeder terlebih dahulu.');
            return;
        }

        $statuses = ['pending', 'confirmed', 'completed', 'canceled'];

        foreach ($doctors as $doctor) {
            foreach (range(1, 3) as $i) {
                $status = $statuses[array_rand($statuses)];

                // Buat appointment
                $appointment = Appointment::create([
                    'doctor_id' => $doctor->id,
                    'user_id' => $users->random()->id,
                    'appointment_date' => Carbon::now()->addDays(rand(1, 10))->setTime(rand(8, 16), [0, 30][rand(0, 1)]),
                    'status' => $status,
                    'notes' => fake()->sentence(8),
                ]);

                // Jika statusnya completed, langsung buat ulasan
                if ($status === 'completed') {
                    DoctorReview::create([
                        'user_id' => $appointment->user_id,
                        'doctor_id' => $appointment->doctor_id,
                        'appointment_id' => $appointment->id,
                        'rating' => fake()->randomFloat(1, 1, 5), // bisa 4.5 dll
                        'comment' => fake()->sentence(10),
                    ]);
                }
            }
        }

        $this->command->info('✅ AppointmentSeeder berhasil dijalankan dan ulasan otomatis dibuat untuk yang completed!');
    }
}
