<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// write a migration to add foreign keys to the tables
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add foreign keys to the orders table
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('user_info_id')->references('id')->on('user_info')->onDelete('cascade');
            $table->foreign('delivery_type_id')->references('id')->on('delivery_types')->onDelete('cascade');
            $table->foreign('payment_type_id')->references('id')->on('payment_types')->onDelete('cascade');
        });
        
        // Add foreign key to users_info table
        Schema::table('users_info', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign keys to order_product pivot table
        Schema::table('order_product', function (Blueprint $table) {
            $table->foreign('orders_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
        });

        // Add foreign key to produt_images table
        Schema::table('product_images', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });

        // Add foreign keys to product_category pivot table
        Schema::table('product_category', function (Blueprint $table) {
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
        });

        // Add foreign key to product_user_info pivot table
        Schema::table('shopping_cart', function (Blueprint $table) {
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('user_info_id')->references('id')->on('user_info')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['delivery_types_id']);
            $table->dropForeign(['payment_types_id']);
            $table->dropForeign(['tables_id']);
        });

        Schema::table('tables', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
        });

        Schema::table('order_product', function (Blueprint $table) {
            $table->dropForeign(['orders_id']);
            $table->dropForeign(['products_id']);
        });

        Schema::table('product_category', function (Blueprint $table) {
            $table->dropForeign(['products_id']);
            $table->dropForeign(['categories_id']);
        });

        Schema::table('shopping_cart', function (Blueprint $table) {
            $table->dropForeign(['products_id']);
            $table->dropForeign(['user_info_id']);
        });
    }
};
