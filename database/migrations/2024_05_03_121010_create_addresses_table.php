<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->string('postcode');
            $table->string('delivery_address1');
            $table->string('address2')->nullable();
            $table->string('city_town');
            $table->string('state');
            $table->string('country_delivery');

            $table->string('billing_firstname');
            $table->string('billing_lastname');
            $table->string('billing_email');
            $table->string('billing_phone');
            $table->string('billing_postcode');
            $table->string('billing_delivery_address1');
            $table->string('billing_address2')->nullable();
            $table->string('billing_city_town');
            $table->string('billing_state');
            $table->string('billing_country_delivery');
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
        Schema::dropIfExists('addresses');
    }
}
