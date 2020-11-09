<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $fillable=['titulo','cuerpo'];
    public $timestamps=false;

    //Relacion con la tabla usuario

    public function usuarios()
    {
        return $this->belongsTo('App\Usuario');
    }
}
