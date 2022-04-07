<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aeroport extends Model
{
    use HasFactory;

    public $timestamp=false;

    public $fillable=[
        'nom',
        'ville',
    ];

    public function cars(){
        return $this->hasMany(Voiture::class,'idAeroport');
    }
}
