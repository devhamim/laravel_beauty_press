<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pages', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->text("title");
      $table->string("slug", 255);
      $table->longText("content")->nullable();
      $table->text("excerpt")->nullable();
      $table->string("status", 45)->index();
      $table->timestamp("schedule_time")->nullable();
      $table->string("post_format", 55)->default("standard");
      $table->string("thumb")->nullable();
      $table->boolean("thumb_status")->default(1);
      $table->integer("update_by")->nullable();
      $table->bigInteger("user_id");
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
    Schema::dropIfExists('pages');
  }
}
