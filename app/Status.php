<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Comentario');
    }
}
