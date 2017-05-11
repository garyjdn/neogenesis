<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retur_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('retur_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('qty')->unsigned();
            $table->string('desc_retur', 512);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retur_details');
    }
}
