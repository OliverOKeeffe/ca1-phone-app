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
              'name' => 'Currys',
              'founded' => '1884',
              'num_locations' => '16',
            ],
     
          ];
          Retailer::insert($retailers);
    }
}
