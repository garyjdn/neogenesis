<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oauth extends Model
{
    protected $fillable = ['user_id', 'oauth_provider', 'oauth_uid'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
