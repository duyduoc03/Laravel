<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Score;
use App\Models\Student;
use App\Models\Student_Subject;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
//        Classes::factory(10)->create();
//        Subject::factory(10)->create();
//        Student::factory(100)->create();
//        Student_Subject::factory(50)->create();
        Score::factory(50)->create();
    }
}
