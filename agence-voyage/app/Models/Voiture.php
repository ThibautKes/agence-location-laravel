<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    public $timestamp=false;

    public $fillable=[
        'url',
        'immatriculation',
        'marque',
        'modele',
        'annee',
        'chevaux',
        'couleur',
        'prix/1000Km',
        'isReserved',
        'dateReserv',
        'dateRetour',
        'idAeroport'
    ];

    public function aeroport(){
        return $this->belongsTo(Aeroport::class,'idAeroport');
    }

    public function reservation(){
        return $this->hasMany(VoitureReservee::class,'idVoiture');
    }


}
