<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Carrier_OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carrier_orders')->insert([[
            'id' => 1,
            'carrier_id' => 1,
            'order_id' => 1,
         ],
         [
            'id' => 2,
            'carrier_id' => 1,
            'order_id' => 2,
         ],
         [
            'id' => 3,
            'carrier_id' => 1,
            'order_id' => 3,
         ],
         [
            'id' => 4,
            'carrier_id' => 1,
            'order_id' => 4,
         ],
         [
            'id' => 5,
            'carrier_id' => 1,
            'order_id' => 5,
         ],
         [
            'id' => 6,
            'carrier_id' => 2,
            'order_id' => 6,
         ],
         [
            'id' => 7,
            'carrier_id' => 2,
            'order_id' => 7,
         ],
         [
            'id' => 8,
            'carrier_id' => 2,
            'order_id' => 8,
         ],
         [
            'id' => 9,
            'carrier_id' => 2,
            'order_id' => 9,
         ],
         [
            'id' => 10,
            'carrier_id' => 2,
            'order_id' => 10,
         ],
         [
            'id' => 11,
            'carrier_id' => 3,
            'order_id' => 11,
         ],
         [
            'id' => 12,
            'carrier_id' => 3,
            'order_id' => 12,
         ],
         [
            'id' => 13,
            'carrier_id' => 3,
            'order_id' => 13,
         ],
         [
            'id' => 14,
            'carrier_id' => 3,
            'order_id' => 14,
         ],
         [
            'id' => 15,
            'carrier_id' => 3,
            'order_id' => 15,
         ]
     ]);
     }
 }

