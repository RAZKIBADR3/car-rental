<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = bcrypt('123456');
        User::create([
            'name' => 'badr', 'email' => 'razkibadr@gmail.com', 'password' => $password
        ]);
    }
}

