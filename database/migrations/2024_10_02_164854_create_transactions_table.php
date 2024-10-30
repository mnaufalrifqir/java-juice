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
            $table->string('street');
            $table->string('province');
            $table->string('city');
            $table->string('postal_code');
            $table->string('phone_number');
            $table->string('email');
            $table->string('courier');
            $table->integer('weight');
            $table->integer('shipping_cost');
            $table->integer('subtotal');
            $table->integer('total');
            $table->string('payment_status');
            $table->string('shipping_status');
            $table->string('payment_url');
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