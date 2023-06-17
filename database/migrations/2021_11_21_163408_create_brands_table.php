<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('brands', function (Blueprint $table) {
      $table->id();
      $table->timestamp('active')->nullable();
      $table->string('name');
      $table->string('slug')->unique();
      $table->string('logo')->nullable();
      $table->boolean('top')->nullable();
      $table->string('meta_title')->nullable();
      $table->text('meta_description')->nullable();
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
    Schema::dropIfExists('brands');
  }
}
