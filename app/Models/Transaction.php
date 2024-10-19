<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'fullname',
        'address',
        'destination',
        'courier',
        'weight',
        'status',
        'subtotal',
        'shipping_cost',
        'total',
        'payment_status',
        'shipping_status',
        'payment_url',
        'user_id',
    ];
}