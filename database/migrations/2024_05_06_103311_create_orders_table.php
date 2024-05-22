<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->foreignId('user_id')->constrained();
            $table->foreignId('products_id')->constrained();
            $table->foreignId('addresses_id')->constrained();
            $table->string('order_name');
            $table->string('order_address');
            $table->string('paymentmode');
            $table->string('product_quantity');
            $table->string('product_price');
            $table->string('order_status');
            $table->string('card_name');
            $table->string('card_number');
            $table->string('card_cvv');
            $table->string('card_month');
            $table->string('card_year');
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
