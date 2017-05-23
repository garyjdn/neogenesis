<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'borthdate', 'gender', 'phone', 'image'];

    protected $hidden = ['password'];

    public function oauth()
    {
        return $this->hasMany('App\Models\Oauth');
    }

}
