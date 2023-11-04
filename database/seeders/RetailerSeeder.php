<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Retailer;

class RetailerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reatailers = [
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
          Retailer::insert($Retailers);
    }
}
