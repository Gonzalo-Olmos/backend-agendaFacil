<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;
    protected $table = "calificaciones";


    //relacion uno a muchos inversa
    public function cliente(){

        return $this->belongsTo('App\Models\Cliente');
    }

}
