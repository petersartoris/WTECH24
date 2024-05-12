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
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete(); // User ID can be null for guest orders
            $table->foreignId('payment_type_id')->constrained()->cascadeOnDelete();
            $table->foreignId('delivery_type_id')->constrained()->cascadeOnDelete();
            $table->string('status', 20)->default('pending'); // Status ('pending', 'processing', 'completed', 'cancelled)

            $table->string('address'); // Address
            $table->string('city'); // City
            $table->string('country'); // Country
            $table->string('zip_code'); // Zip code
            $table->string('phone_number'); // Phone number
            $table->string('first_name'); // First name
            $table->string('last_name'); // Last name
            $table->decimal('total_price', 8, 2); // Total price (8 digits, 2 decimal places

            $table->timestamps();
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
