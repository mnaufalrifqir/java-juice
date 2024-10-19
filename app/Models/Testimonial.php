<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProjectClient;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'message',
        'rating',
        'transaction_id',
    ];

    public function trasanction()
    {
        return $this->hasOne(Transaction::class, 'transaction_id', 'id');
    }
}