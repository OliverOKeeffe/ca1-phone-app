<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
     /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data that is beign seeded into the database
        $phones = [
            [
              'model_name' => 'IPhone 11',
              'year' => '2019',
              'battery_life' => '14hrs',
              'height' => '5.94"',
              'weight' => '194g',
              'brand_id' => '1',
            ],
     
          ];
          Phone::insert($phones);
    }
}
