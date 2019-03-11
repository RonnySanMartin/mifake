<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'status_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasRoles($roles) {
        return $this->role->nombre === $roles;
    }

    public function comentarios()
    {
        return $this->hasMany('App\Comentario');
    }

    public function fotos()
    {
        return $this->hasMany('App\Foto');
    }

    // public function likes()
    // {
    //     return $this->hasMany('App\Like');
    // }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    
    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}