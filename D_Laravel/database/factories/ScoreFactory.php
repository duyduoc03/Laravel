<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreFactory extends Factory
{
    public function definition()
    {
        $student = Student::all()->pluck("sid")->toArray();
        $subject = Subject::all()->pluck("sbid")->toArray();
        return [
            'scid' =>$this->faker->randomFloat(0,0,999),
            'mark'=>$this->faker->randomFloat(3,0,100),
            'result'=>$this->faker->randomElement(array('xuat sac','tot','kha','trung binh','kem')),
            'sid'=>$this->faker->randomElement($student),
            'sbid'=>$this->faker->randomElement($subject)

        ];
    }
}
