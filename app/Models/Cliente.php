<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";


    //relaciones uno a muchos
    public function alquileres(){

        return $this->hasMany('App\Models\Alquiler');
    }

    public function calificaciones(){

        return $this->hasMany('App\Models\Calificacion');
    }



}
