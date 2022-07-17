<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    public function definition()
    {
        return [
            'sbid' => "S".$this->faker->randomNumber(),
            'name' => $this->faker->jobTitle
        ];
    }
}
