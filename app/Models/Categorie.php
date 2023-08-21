<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categorie';
    use HasFactory;

    public function vehicules(){
        return $this->hasMany(Vehicule::class, 'categorie_id');
    }
}

