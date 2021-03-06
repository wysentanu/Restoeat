<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Restaurant extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function menus()
    {
        return $this->hasMany('App\Menu');
    }
}
