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
            $table->string('name')->nullable(false);
            $table->double('price')->nullable(false);
            $table->integer('stock')->nullable(false);
            // $table->unsignedBigInteger('image_id')->nullable(false);
            $table->unsignedBigInteger('category_id')->nullable(false);
            $table->foreign('category_id')->references('id')->on('categories');
            // $table->foreign('image_id')->references('id')->on('imagenes');
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
