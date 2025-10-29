<?php

namespace Database\Seeders;

//use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Athelet;
use App\Models\Car;
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
        Car::factory(10)->create();
        Student::factory(50)->create();
        Athelet::factory(20)->create();
        Teacher::factory(50)->create();
        // User::factory(10)->create();

    }
}
