<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        Student::create([
            'name' => 'Student 1',
            'status' => 'In Behandeling',
        ]);
        // Voeg meer studenten toe als nodig
    }
}
