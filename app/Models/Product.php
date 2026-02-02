<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',
        'description',
        'price',
        'stock',
        'is_new',
        'on_sale',
        'sale_price',
    ];

    protected $casts = [
        'is_new' => 'boolean',
        'on_sale' => 'boolean',
    ];


   
    protected $appends = ['display_price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getDisplayPriceAttribute()
    {
        return $this->on_sale && $this->sale_price
            ? $this->sale_price
            : $this->price;
    }
}
