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
            [
                'name' => 'Cardiologist',
                'fontawesome_icon' => 'heart-pulse',
                'description' => 'Specialist in heart diseases',
            ],
            [
                'name' => 'Dermatologist',
                'fontawesome_icon' => 'skin',
                'description' => 'Specialist in skin conditions',
            ],
            [
                'name' => 'Neurologist',
                'fontawesome_icon' => 'brain',
                'description' => 'Specialist in brain and nervous system',
            ],
            [
                'name' => 'Pediatrician',
                'fontawesome_icon' => 'child',
                'description' => 'Specialist in child healthcare',
            ],
            [
                'name' => 'Dentist',
                'fontawesome_icon' => 'tooth',
                'description' => 'Specialist in dental care and oral health',
            ],
        ];

        foreach ($specializations as $spec) {
            DoctorSpecialization::create($spec);
        }
    }
}
