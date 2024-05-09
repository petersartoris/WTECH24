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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_info_id')->constrained(); // `user_info_id` references `id` on `user_info` table
            $table->foreignId('delivery_type_id')->constrained(); // `deliver_type_id` references `id` on `delivery_type` table
            $table->foreignId('payment_type_id')->constrained(); // 
            
            $table->string('state', 16);
            $table->string('name', 255)->nullable();
            $table->string('email', 320)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->string('postal_code', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
