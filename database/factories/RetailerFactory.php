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
            'name' => $this->faker->unique()->text(5), 
            'founded' => $this->faker->text(50),
            'num_locations' => $this->faker->text(50),
        ];
    }
}
