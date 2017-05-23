<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryDetail extends Model
{
    protected $fillable = ['category_id', 'attribute_id'];
    public $timestamps = false;
}
