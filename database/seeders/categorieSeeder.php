<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::insert([
            ['libelle' => 'small' , 'prix' => 200],
            ['libelle' => 'medium' , 'prix' => 280],
            ['libelle' => 'large' , 'prix' => 550],
            ['libelle' => 'luxury' , 'prix' => 800],
        ]);
    }
}
