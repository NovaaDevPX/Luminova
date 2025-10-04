<?php

namespace Database\Seeders;

use App\Models\DoctorSpecialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specializations = [
            ['name' => 'Cardiologist', 'description' => 'Specialist in heart diseases'],
            ['name' => 'Dermatologist', 'description' => 'Specialist in skin conditions'],
            ['name' => 'Neurologist', 'description' => 'Specialist in brain and nervous system'],
            ['name' => 'Pediatrician', 'description' => 'Specialist in child healthcare'],
        ];

        foreach ($specializations as $spec) {
            DoctorSpecialization::create($spec);
        }
    }
}
