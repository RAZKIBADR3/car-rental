<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    public function options(){
        return $this->belongsToMany(Option::class);
    }
    
    protected $table = 'vehicule';
    protected $fillable = ['name', 'photo', 'marque', 'model', 'categorie_id'];
    use HasFactory;

    public function locations(){
        return $this->hasMany(Location::class);
    }


    public function categorie(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}

