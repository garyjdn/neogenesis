<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('admin_id')->unsigned()->nullable();
            $table->integer('shipper_id')->unsigned();
            $table->integer('method_id')->unsigned();
            $table->integer('address_id')->unsigned();
            $table->integer('account_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->string('nama_penerima', 64);
            $table->dateTime('payment_date')->nullable();
            $table->integer('shipment_fee')->unsigned();
            $table->string('resi_order', 32)->nullable();
            $table->date('shipping_date')->nullable();
            $table->date('delivered_date')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
