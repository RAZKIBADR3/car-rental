<?php

namespace Database\Seeders;

use App\Models\Option_vehicule;
use Illuminate\Database\Seeder;

class optionVehiculeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Option_vehicule::insert([
            ['vehicule_id' => 1 , 'option_id' => 1],
            ['vehicule_id' => 1 , 'option_id' => 7],
            ['vehicule_id' => 1 , 'option_id' => 6],
            ['vehicule_id' => 2 , 'option_id' => 4],
            ['vehicule_id' => 2 , 'option_id' => 3],
            ['vehicule_id' => 3 , 'option_id' => 1],
            ['vehicule_id' => 3 , 'option_id' => 5],
            ['vehicule_id' => 3 , 'option_id' => 7],
            ['vehicule_id' => 4 , 'option_id' => 2],
            ['vehicule_id' => 4 , 'option_id' => 6],
            ['vehicule_id' => 5 , 'option_id' => 1],
            ['vehicule_id' => 5 , 'option_id' => 4],
            ['vehicule_id' => 5 , 'option_id' => 5],
            ['vehicule_id' => 6 , 'option_id' => 1],
            ['vehicule_id' => 6 , 'option_id' => 4],
            ['vehicule_id' => 6 , 'option_id' => 5],
            ['vehicule_id' => 6 , 'option_id' => 6],
            ['vehicule_id' => 6 , 'option_id' => 7]
        ]);
    }
}
