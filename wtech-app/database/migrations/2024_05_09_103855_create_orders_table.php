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
            $table-> bigInteger('user_info_id')->unsigned(); // foreign key which will be setup in foreign key migration.
            $table-> bigInteger('delivery_type_id')->unsigned(); // foreign key which will be setup in foreign key migration.
            $table-> bigInteger('payment_type_id')->unsigned(); // foreign key which will be setup in foreign key migration.
            
            $table->string('state', 16);
            $table->string('name', 255);
            $table->string('email', 320);
            $table->string('address', 255);
            $table->string('city', 255);
            $table->string('country', 255);
            $table->string('postal_code', 255);
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
