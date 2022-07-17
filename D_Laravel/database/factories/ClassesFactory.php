<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClassesFactory extends Factory
{
    public function definition()
    {
        return [
            'cid' => "TH".$this->faker->randomNumber(),
            'name' => $this->faker->unique()->name,
            'room' => $this->faker->languageCode
        ];
    }
}
