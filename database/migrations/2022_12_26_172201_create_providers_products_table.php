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
    Schema::create('providers_products', function (Blueprint $table) {

      $table->bigIncrements('id');
      $table->bigInteger('provider_id')->unsigned();
      $table->bigInteger('product_id')->unsigned();
    });
    //Foreign Keys
    Schema::table('providers_products', function($table) {
      $table->foreign('provider_id')->references('id')->on('providers');
      $table->foreign('product_id')->references('id')->on('products');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('providers_products');
  }
};
