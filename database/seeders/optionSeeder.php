<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class optionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Option::insert([
            ['designation' => 'ABS'],
            ['designation' => '4 ports'],
            ['designation' => 'Audio - video'],
            ['designation' => 'climatisation'],
            ['designation' => 'direction assistée'],
            ['designation' => 'airbags'],
            ['designation' => 'GPS'],
        ]);
    }
}
