<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        Student::create([
            'name' => 'Leerling 1',
            'status' => 'In Behandeling',
        ]);
        // Add more students as needed
    }
}
