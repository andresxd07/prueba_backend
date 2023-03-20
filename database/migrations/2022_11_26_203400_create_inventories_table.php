<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('inventories', function (Blueprint $table) {
      // Basic schema defintion
      $table->bigIncrements('id');
      $table->string('product_name');
      $table->integer('quantity');
      $table->date('available_date')->default("2019-03-02");
      $table->integer('require_products');
      $table->integer('missing');
      $table->unsignedBigInteger('product_id');
      $table->timestamps();
    });

    Schema::table('inventories', function($table) {
      //Foreign Keys
      $table->foreign('product_id')->references('id')->on('products');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('inventories');
  }
};
