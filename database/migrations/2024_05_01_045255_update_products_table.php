<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('product_code')->nullable();
            $table->string('product_brand')->nullable();
            $table->string('product_origin_country')->nullable();
            $table->string('product_packging_quantity')->nullable();
            $table->string('product_barcode')->nullable();
            $table->string('product_msds')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
