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
            $table->string('name');
            $table->integer('price');
            $table->integer('product_stock');
            $table->string('product_code');
            $table->string('product_color');
            $table->integer('s')->nullable();
            $table->integer('m')->nullable();
            $table->integer('l')->nullable();
            $table->integer('xl')->nullable();
            $table->integer('xxl')->nullable();
            $table->text('image');
            $table->text('image_back');
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
