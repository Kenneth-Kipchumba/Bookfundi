<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Court>
 */
class CourtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'court_name' => $this->faker->name(),
            'court_level' => $this->faker->name(),
            'court_location' => $this->faker->city(),
            'court_country' => $this->faker->country(),
        ];
    }
}
