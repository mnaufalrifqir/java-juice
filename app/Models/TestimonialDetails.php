<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestimonialDetails extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'comment',
        'rating',
        'details_transaction_id',
        'testimonial_id',
    ];

    public function transactionDetails()
    {
        return $this->belongsTo(TransactionDetails::class);
    }

    public function testimonial()
    {
        return $this->belongsTo(Testimonial::class);
    }
}
