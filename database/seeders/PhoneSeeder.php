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
      Phone::factory()->times(50)->create();
        // Data that is beign seeded into the database
        // $phones = [
        //     [
        //       'model_name' => 'IPhone 11',
        //       'year' => '2019',
        //       'battery_life' => '14hrs',
        //       'height' => '5.94"',
        //       'weight' => '194g',
        //       'retailer_id' => '1',
        //       'brand_id' => '1',
        //     ],
        //     [
        //       'model_name' => 'Samsung',
        //       'year' => '2019',
        //       'battery_life' => '14hrs',
        //       'height' => '5.94"',
        //       'weight' => '194g',
        //       'retailer_id' => '2',
        //       'brand_id' => '1',
        //     ],
     
          // ];
          // $numOfPhones = 5;
          // Phone::factory()->times(3)->create();
  
          // foreach(Phone::all() as $phone) {
          //     $phones = Phone::inRandomOrder()->take(rand(1,$numOfPhones))->pluck('id');
          //     $phone->phones()->attach($phones);
          // }
          // Phone::insert($phones);
    }
}
