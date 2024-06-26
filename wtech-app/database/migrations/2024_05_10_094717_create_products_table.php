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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name
            $table->string('code', 15)->unique(); // Code
            $table->text('description'); // Description
            $table->decimal('price', 10, 2); // Price
            $table->integer('quantity'); // Quantity
            $table->string('availability', 20)->default('available'); // Availability in ('available', 'unavailable')
            $table->softDeletes(); // Soft delete column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
