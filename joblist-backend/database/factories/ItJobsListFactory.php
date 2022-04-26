<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItJobsListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(["Web Developer","Programmer","Graphic Designer", "IT Specialist"]),
            'location' => $this->faker->streetName(),
            'status' => $this->faker->randomElement(["Full Time","Part Time"]),
            'description' => $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true)
        ];
    }
}
