<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Retailer>
 */
class RetailerFactory extends Factory
{
  
    // fake text to be returend for the database
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->text(20), 
            'founded' => $this->faker->year(10),
            'num_locations' => $this->faker->randomDigit(10),
        ];
    }
}
