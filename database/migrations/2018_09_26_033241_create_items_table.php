<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('uxpack',false,true);
            $table->string('presentation');
            $table->string('image',128)->nulleable();
            $table->integer('category_id',false,true);
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('brand_id',false,true);
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->double('sugest_price');
            $table->double('buy_price');
            $table->double('sell_price');
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
        Schema::dropIfExists('items');
    }
}
