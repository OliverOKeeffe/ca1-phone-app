<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phone>
 */
class PhoneFactory extends Factory
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
            'model_name' => $this->faker->unique()->text(5), 
            'year' => $this->faker->text(50),
            'battery_life' => $this->faker->text(50),
            'height' => $this->faker->text(50),
            'weight' => $this->faker->text(50),
            'retailer_id' => $this->faker->text(50),
            'brand_id' => $this->faker->text(50),
        ];
    }
}
