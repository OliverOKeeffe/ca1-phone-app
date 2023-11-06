<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data that is beign seeded into the database
        $brands = [
            [
              'name' => 'Apple',
              'founded' => '1976',
              'location' => 'LA, USA',
            ],
            [
                'name' => 'Samsung',
                'founded' => '1969',
                'location' => 'Suwon-Si, South Korea',
            ],
            [
              'name' => 'OnePlus',
              'founded' => '2013',
              'location' => 'Shenzhen, China',
          ],
     
          ];
          Brand::insert($brands);
    }
}
