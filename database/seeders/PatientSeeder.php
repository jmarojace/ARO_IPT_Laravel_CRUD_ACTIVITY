<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patients = [
            ['student_id' => '2024-0001', 'name' => 'Joshua Gwapo', 'course' => 'BSIT', 'year_level' => 3],
            ['student_id' => '2024-0002', 'name' => 'Ramon Sanchez', 'course' => 'BSCS', 'year_level' => 2],
            ['student_id' => '2024-0003', 'name' => 'Loyd Alo', 'course' => 'BSIS', 'year_level' => 4],
            ['student_id' => '2024-0004', 'name' => 'Rosemarie', 'course' => 'BSIT', 'year_level' => 1],
        ];

        foreach ($patients as $patient) {
            Patient::create($patient);
        }
    }
}