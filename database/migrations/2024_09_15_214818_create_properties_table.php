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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('phone')->nullable();
            $table->decimal('price', 12, 2)->default(0); // 12 digits total, 2 after the decimal point
            $table->string('short_description')->nullable();
            $table->decimal('property_space')->nullable();
            $table->boolean('garden')->default(0)->nullable();
            $table->decimal('garden_space')->nullable();

            $table->integer('number_of_floors')->default(1)->nullable();
            $table->integer('number_of_rooms')->default(0)->nullable();
            $table->integer('number_of_bathrooms')->default(0)->nullable();
            // $table->date('year_built')->default(1)->nullable();
            $table->text('long_description')->nullable();
            $table->text('location')->nullable();
            $table->json('images')->nullable();
            $table->string('video')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->string('sector')->nullable();
            $table->string('banner')->nullable();
            $table->enum('property_type',['sale','rent'])->nullable();
            $table->enum('finishing_type',['full','almost','half','without'])->nullable();
            $table->enum('facade_finishing',['full','almost','half','without'])->nullable();
            $table->boolean('active')->default(1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
