<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_item_number', 25)->nullable();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->text('name');
            $table->string('link', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->text('quantityRanges')->nullable();
            $table->string('shipped_by')->nullable();
            $table->integer('shipping_rate')->nullable();
            $table->string('approxWeight')->nullable();
            $table->double('chinaLocalDelivery')->nullable();
            $table->string('order_number', 255)->nullable();
            $table->string('tracking_number', 255)->nullable();
            $table->integer('actual_weight')->nullable();
            $table->integer('quantity')->nullable();
            $table->double('product_value')->nullable();
            $table->double('first_payment')->nullable();
            $table->double('shipping_charge')->nullable();
            $table->double('courier_bill')->nullable();
            $table->double('out_of_stock')->nullable();
            $table->double('missing')->nullable();
            $table->double('adjustment')->nullable();
            $table->double('refunded')->nullable();
            $table->double('last_payment')->nullable();
            $table->double('due_payment')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
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
        Schema::dropIfExists('order_item');
    }
}
