<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item_variations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('order_item_id');
            $table->unsignedInteger('product_id');
            $table->string('itemCode', 255)->nullable();
            $table->text('attributes')->nullable();
            $table->string('image', 255)->nullable();
            $table->double('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->double('subTotal')->nullable();
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_item_variations');
    }
}
