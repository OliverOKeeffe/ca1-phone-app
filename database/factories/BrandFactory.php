<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    // /**
    //  * Define the model's default state.
    //  *
    //  * @return array<string, mixed>
    //  */
    // // fake text to be returend for the database
    public function definition(): array
    {
        // this creates the fake data for the seeders
        return [
            'name' => $this->faker->unique()->word(5), 
            'founded' => $this->faker->year(50),
            'location' => $this->faker->country(50),
        ];
    }
}
