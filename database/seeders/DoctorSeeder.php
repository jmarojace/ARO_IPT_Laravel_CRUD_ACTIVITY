<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = [
            ['name' => 'Dr. Maria Santos', 'specialization' => 'Cardiology', 'email' => 'maria.santos@clinic.com', 'phone' => '09171234567'],
            ['name' => 'Dr. Jose Rizal', 'specialization' => 'Dermatology', 'email' => 'jose.rizal@clinic.com', 'phone' => '09182345678'],
            ['name' => 'Dr. Ana Reyes', 'specialization' => 'Pediatrics', 'email' => 'ana.reyes@clinic.com', 'phone' => '09193456789'],
        ];

        foreach ($doctors as $doctor) {
            Doctor::create($doctor);
        }
    }
}