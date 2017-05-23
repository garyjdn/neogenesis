<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeDetail extends Model
{
    protected $fillable = ['attribute_id', 'value'];
    public $timestamps = false;
}
