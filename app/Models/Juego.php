<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;
    protected $table = "juegos";

  //relacion muchos a muchos
  public function alquileres(){
    return $this->belongsToMany('App\Models\Alquiler');
}

}
