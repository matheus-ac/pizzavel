<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity',false, true);
            $table->integer('order_id', false, true);
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('product_id', false, true);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict');
            $table->integer('flavors_id', false, true)->nullable();
            $table->foreign('flavors_id')->references('id')->on('flavors');
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
        Schema::dropIfExists('order_items');
    }
}
