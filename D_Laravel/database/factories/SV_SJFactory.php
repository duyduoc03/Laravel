<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SV_SJFactory extends Factory
{
    public function definition()
    {
        $student = Student::all()->pluck("sid")->toArray();
        $subject = Subject::all()->pluck("sbid")->toArray();
        return [
            'sid'=>$this->faker->randomElement($student),
            'sbid'=>$this->faker->randomElement($subject)
        ];
    }
}
