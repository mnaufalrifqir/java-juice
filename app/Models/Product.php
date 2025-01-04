<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'weight',
        'price',
        'current_price',
        'stock',
        'sold',
        'discount',
        'image',
    ];

    public function detailsTransaction()
    {
        return $this->hasMany(DetailsTransaction::class, 'product_id', 'id');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'product_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function testimonialDetails()
    {
        return $this->hasMany(TestimonialDetails::class, 'product_id', 'id');
    }
}