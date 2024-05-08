<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function place(){
        return $this->hasMany(Place::class);
    }
    
    public function utilisateur(){
        return $this->belongsToMany(Utilisateur::class);
    }
}
