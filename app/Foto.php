<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comentario;

class Foto extends Model
{
    public function comentarios() {
        return $this->hasMany('App\Comentario');
    }

    // public function likes() {
    //     return $this->hasMany('App\Like');
    // }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
