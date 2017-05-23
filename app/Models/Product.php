<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'name', 'desc', 'price', 'weight', 'image', 'brand', 'memory', 'rating'];

    public function kategori()
    {
      return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
