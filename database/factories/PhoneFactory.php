<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;

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
        // this creates the fake data for the seeders

        return [
            'model_name' => $this->faker->unique()->company(5), 
            'year' => $this->faker->year(5),
            'battery_life' => $this->faker->randomNumber(2, mt_getrandmax()),
            'height' => $this->faker->randomNumber(2, mt_getrandmax()),
            'weight' => $this->faker->randomNumber(3, mt_getrandmax()),
            'brand_id' => Brand::inRandomOrder()->take(1)->pluck('id')[0]
        ];
    }
}
