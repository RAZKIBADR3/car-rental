<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option_vehicule extends Model
{
    protected $table = 'option_vehicule';

    protected $fillable = ['vehicule_id', 'option_id'];
    use HasFactory;
}
