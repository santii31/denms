<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsWaistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_waist', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->foreignId('product_id');
            $table->foreignId('waist_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('waist_id')->references('id')->on('waists');
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
        Schema::dropIfExists('product_waist');
    }
}
