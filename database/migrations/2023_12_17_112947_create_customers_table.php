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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fiesr_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->text('mobile')->unique();
            $table->string('password');
            $table->text('address')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('nid')->nullable ();
            $table->text('image')->nullable();
            $table->string('blood_group')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
