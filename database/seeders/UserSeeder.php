<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new user;
        $admin->name = "Oliver O'Keeffe";
        $admin->email = "n00221912@iadt.ie";
        $admin->password = "secret123";
        $admin->save();
    }
}
