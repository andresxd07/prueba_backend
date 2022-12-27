<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('carrier_order', function (Blueprint $table) {

          $table->bigInteger('carrier_id')->unsigned();
          $table->bigInteger('order_id')->unsigned();
        });

        Schema::table('carrier_order', function($table) {

          $table->foreign('carrier_id')->references('id')->on('carriers');
          $table->foreign('order_id')->references('id')->on('orders');
        });
      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrier_order');
    }
};
