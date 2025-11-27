<?php

namespace Database\Seeders;

//use App\Models\User;

use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Teacher::factory(50)->create();
        Student::factory(20)->create();
        // User::factory(10)->create();

    }
}
