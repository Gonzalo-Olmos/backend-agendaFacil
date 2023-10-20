<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\FunctionContextPass;

class Alquiler extends Model
{
    use HasFactory;
    protected $table = "alquileres";

    //relacion uno a muchos inversa
    public function cliente(){

        return $this->belongsTo('App\Models\Cliente');
    }

    //relacion muchos a muchos
    public function juegos(){
        return $this->belongsToMany('App\Models\Juego');
    }

    //relacion uno a uno
    public function pagos(){
        return $this->hasOne('App\Models\Pago');
    }

}
