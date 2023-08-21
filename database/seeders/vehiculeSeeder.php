<?php

namespace Database\Seeders;

use App\Models\Vehicule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vehiculeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicule::insert([
            ['name'=>'Hyundai i10', 'photo'=>'img/i10.png', 'marque'=>'Hyundai', 'model'=> '2020', 'categorie_id'=>1],
            ['name'=>'Dacia Sandero', 'photo'=>'img/sandero.png', 'marque'=>'Dacia', 'model'=> '2018', 'categorie_id'=>1],
            ['name'=>'Volkswagen Golf', 'photo'=>'img/volkswagen_golf.png', 'marque'=>'Volkswagen', 'model'=> '2021', 'categorie_id'=>2],
            ['name'=>'Seat Leon', 'photo'=>'img/seat_leon.png', 'marque'=>'Seat', 'model'=> '2021', 'categorie_id'=>2],
            ['name'=>'Peugeot 508', 'photo'=>'img/peugeot_508.png', 'marque'=>'Peugeot', 'model'=> '2022', 'categorie_id'=>3],
            ['name'=>'Audi a6', 'photo'=>'img/audi_a6.png', 'marque'=>'Audi', 'model'=> '2022', 'categorie_id'=>4],
        ]);
    }
}
