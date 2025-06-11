<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasOne('Product');
    }
    public function productImage()
    {
        return $this->hasOneThrough(Product::class, Category::class);
    }
}
