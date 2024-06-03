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
        Schema::create('food_ingredients', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('ingredient_id');
            $table->foreign('food_id')->references('id')->on('food')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ingredient_id')->references('id')->on('ingredients')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->primary(['food_id', 'ingredient_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_ingredients');
    }
};
