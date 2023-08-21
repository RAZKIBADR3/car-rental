<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';
    protected $fillable = [
        'date_debut',
        'date_fin',
        'client',
        'vehicule_id',
        'client_id',
    ];
    use HasFactory;

    public function vehicule(){
        return $this->belongsTo(Vehicule::class);
    }
}
