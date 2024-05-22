<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('contact');
            $table->string('title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('city');
            $table->string('country');
            $table->string('delivery_address');
            $table->string('customer_type');
            $table->string('website')->nullable();
            $table->string('post_office')->nullable();
            $table->string('account_user_name')->nullable();
            $table->string('account_user_email')->nullable();
            $table->string('account_user_contact')->nullable();
            $table->string('computer_card')->nullable();
            $table->string('commercial_registration_no')->nullable();

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
