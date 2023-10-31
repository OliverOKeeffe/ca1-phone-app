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
        // Brand::factory()->count(20)->create(); 
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
     
          ];
          Brand::insert($brands);
    }
}
