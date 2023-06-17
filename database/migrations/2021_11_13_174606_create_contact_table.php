<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('contact', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name', 255);
      $table->string('email', 255);
      $table->string('phone', 255)->nullable();
      $table->text('message')->nullable();
      $table->string('status')->default('contact');
      $table->integer('user_id')->nullable();
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
    Schema::dropIfExists('contact');
  }
}
