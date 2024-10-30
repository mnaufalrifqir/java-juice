<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name',
        'street',
        'province',
        'city',
        'postal_code',
        'phone_number',
        'email',
        'courier',
        'weight',
        'shipping_cost',
        'subtotal',
        'total',
        'payment_status',
        'shipping_status',
        'payment_url',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function detailsTransaction()
    {
        return $this->hasMany(DetailsTransaction::class, 'transaction_id', 'id');
    }
}