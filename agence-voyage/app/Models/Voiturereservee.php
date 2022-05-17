<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiturereservee extends Model
{
    use HasFactory;

    public $timestamps=false;

    public $fillable=[
        'idClient',
        'idVoiture',
        'immatriculation',
        'dateReserv',
        'dateRetour'
    ];

    public function voiture(){
        return $this->belongTo(Voiture::class,'id','idVoiture');
    }
}
