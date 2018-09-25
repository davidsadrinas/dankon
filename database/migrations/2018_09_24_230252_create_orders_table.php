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
            $table->double('total_nofact');
            $table->double('total_fact');
            $table->double('total');
            $table->unsignedMediumInteger('user_id');
            $table->unsignedMediumInteger('client_id');
            $table->unsignedMediumInteger('payment_id');
            $table->unsignedMediumInteger('paymentstatus_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('client_id')->references('id')->on('clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('paymentstatus_id')->references('id')->on('paymentstatus')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
