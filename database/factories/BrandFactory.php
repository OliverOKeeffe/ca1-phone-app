<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // fake text to be returend for the database
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->string(4), 
            'founded' => $this->faker->text(50),
            'location' => $this->faker->text(50)
        ];
    }
}
