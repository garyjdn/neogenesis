<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('name', 256);
            $table->string('desc', 5000)->nullable();
            $table->integer('price')->unsigned();
            $table->integer('weight')->unsigned();
            $table->string('image', 256);
            $table->float('rating', 2, 1)->nullable();
            $table->integer('total_rate')->unsigned()->nullable();
            $table->string('brand', 32)->nullable();
            $table->string('memory', 32)->nullable();
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
        Schema::dropIfExists('products');
    }
}
