<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Carrier_OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carrier_order')->insert([[
            'carrier_id' => '1',
            'order_id' => '1',
         ],
         [
            'carrier_id' => '1',
            'order_id' => '2',
         ],
         [
            'carrier_id' => '1',
            'order_id' => '3',
         ],
         [
            'carrier_id' => '1',
            'order_id' => '4',
         ],
         [
            'carrier_id' => '1',
            'order_id' => '5',
         ],
         [
            'carrier_id' => '2',
            'order_id' => '6',
         ],
         [
            'carrier_id' => '2',
            'order_id' => '7',
         ],
         [
            'carrier_id' => '2',
            'order_id' => '8',
         ],
         [
            'carrier_id' => '2',
            'order_id' => '9',
         ],
         [
            'carrier_id' => '2',
            'order_id' => '10',
         ],
         [
            'carrier_id' => '3',
            'order_id' => '11',
         ],
         [
            'carrier_id' => '3',
            'order_id' => '12',
         ],
         [
            'carrier_id' => '3',
            'order_id' => '13',
         ],
         [
            'carrier_id' => '3',
            'order_id' => '14',
         ],
         [
            'carrier_id' => '3',
            'order_id' => '15',
         ]
     ]);
     }
 }

