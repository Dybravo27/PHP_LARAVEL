<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'path',
    ];
    use HasFactory;
    public function products()
    {
        return $this->hasOne('Product');
    }
    public function productImage()
    {
        return $this->hasOneThrough(Product::class, Category::class);
    }
    /**
     * Get the parent imageable model (post or video).
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
