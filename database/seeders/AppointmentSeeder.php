<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Doctor;
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
        // Ambil dokter dan user yang sudah ada
        $doctors = Doctor::all();
        $users = User::all();

        // Jika tidak ada data dokter atau user, hentikan
        if ($doctors->isEmpty() || $users->isEmpty()) {
            $this->command->warn('Tidak ada data dokter atau user. Jalankan DoctorSeeder dan UserSeeder terlebih dahulu.');
            return;
        }

        // Contoh status yang mungkin dimiliki appointment
        $statuses = ['pending', 'confirmed', 'completed', 'canceled'];

        // Buat beberapa appointment secara acak
        foreach ($doctors as $doctor) {
            foreach (range(1, 3) as $i) { // setiap dokter punya 3 appointment
                Appointment::create([
                    'doctor_id' => $doctor->id,
                    'user_id' => $users->random()->id,
                    'appointment_date' => Carbon::now()->addDays(rand(1, 10))->setTime(rand(8, 16), [0, 30][rand(0, 1)]),
                    'status' => $statuses[array_rand($statuses)],
                    'notes' => fake()->sentence(8),
                ]);
            }
        }
    }
}
