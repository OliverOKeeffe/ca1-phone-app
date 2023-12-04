<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Retailer;
use App\Models\Phone;

class RetailerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numOfRetailers = 5;
        Retailer::factory()->times(3)->create();

        foreach(Phone::all() as $phone) {
            $retailers = Retailer::inRandomOrder()->take(rand(1,$numOfretailers))->pluck('id');
            $phone->retailers()->attach($retailers);
        }

    }
}