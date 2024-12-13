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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street_address');
            $table->string('province');
            $table->string('city');
            $table->string('postal_code');
            $table->string('phone_number');
            $table->string('email');
            $table->string('courier');
            $table->float('weight');
            $table->float('shipping_cost');
            $table->float('subtotal');
            $table->float('total');
            $table->string('payment_status');
            $table->string('shipping_status');
            $table->boolean('review_status')->default(false);
            $table->string('payment_url');
            $table->string('snap_token');
            $table->string('order_id');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};