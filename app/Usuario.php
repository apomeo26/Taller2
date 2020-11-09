<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps=false;
    protected $fillable=['nombre','email'];
  

    //Relacion con la tabla publicacion

    public function publicaciones(){
        return $this->hasMany('App\Publicacion');
    }

}
