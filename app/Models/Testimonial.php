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
        'comment',
        'rating',
        'transaction_id',
    ];

    public function trasanction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function testimonialDetails()
    {
        return $this->hasMany(TestimonialDetails::class);
    }
}