<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'prenom',
        'num_tel',
        'email',
        'password',
        'type',
    ];
    public function card(){
        return $this->hasOne(Card::class);
    }
    
    public function parking(){
        return $this->hasMany(Parking::class);
    }
}
