<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'contenido', 'user_id', 'foto_id'
    ];
    // public function likes()
    // {
    //     return $this->hasMany('App\Like');
    // }

    public function foto()
    {
        return $this->belongsTo('App\Foto');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }
    
}
