<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testimonial_details', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->float('rating');
            $table->foreignId('testimonial_id')->constrained()->onDelete('cascade');
            $table->foreignId('details_transaction_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial_details');
    }
};
