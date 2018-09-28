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
            $table->double('total_no_fact');
            $table->double('total_fact');
            $table->double('total');
            $table->integer('user_id',false,true);
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('client_id',false,true);
            $table->foreign('client_id')->references('id')->on('clients');
            $table->integer('payment_id',false,true);
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->integer('payment_status_id',false,true);
            $table->foreign('payment_status_id')->references('id')->on('payment_statuses');
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
