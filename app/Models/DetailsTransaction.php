<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailsTransaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'quantity',
        'total_price',
        'total_weight',
        'transaction_id',
        'product_id',
    ];

    public function trasanction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}