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
      $table->bigInteger('product_id')->unsigned();
      $table->string('provider');
      $table->string('product_name');
      $table->bigInteger('quantity');
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
