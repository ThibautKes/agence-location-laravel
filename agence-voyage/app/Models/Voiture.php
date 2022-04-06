<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    public function allCars(){
        // This = voiture en cours
        // SELECT * FROM users WHERE id=$this->user_id
        return $this->belongsTo("App\Models\Voiture", "user_id");
    }

}
