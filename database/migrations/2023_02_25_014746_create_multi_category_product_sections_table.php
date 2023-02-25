<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multi_category_product_sections', function (Blueprint $table) {
            $table->id();
            $table->string('headings');
            $table->unsignedBigInteger('category_one')->nullable();
            $table->unsignedBigInteger('category_two')->nullable();
            $table->unsignedBigInteger('category_three')->nullable();
            $table->unsignedBigInteger('category_four')->nullable();

            $table->foreign('category_one')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('category_two')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('category_three')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('category_four')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('multi_category_product_sections');
    }
};
