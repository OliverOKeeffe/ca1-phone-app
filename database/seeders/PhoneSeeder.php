<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    {
        // Data that is beign seeded into the database
        $brands = [
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
