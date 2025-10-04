<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\DoctorSpecialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specializations = DoctorSpecialization::all();

        if ($specializations->count() == 0) {
            $this->call(DoctorSpecializationSeeder::class);
            $specializations = DoctorSpecialization::all();
        }

        Doctor::create([
            'name' => 'Dr. John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
            'phone' => '081234567890',
            'address' => 'Jl. Mawar No. 12, Jakarta',
            'birth_date' => '1980-05-10',
            'specialization_id' => $specializations->random()->id
        ]);

        Doctor::create([
            'name' => 'Dr. Sarah Smith',
            'email' => 'sarah@example.com',
            'password' => bcrypt('password'),
            'phone' => '081234567891',
            'address' => 'Jl. Melati No. 20, Bandung',
            'birth_date' => '1985-09-15',
            'specialization_id' => $specializations->random()->id
        ]);
    }
}
