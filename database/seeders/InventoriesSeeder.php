<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventories')->insert([[
              'id' => '1',
               'quantity' => '3',
               'product_id' => '1',
           ],
           [
               'id' => '2',
               'quantity' => '3',
               'product_id' => '2',
           ],
           [
               'id' => '3',
               'quantity' => '7',
               'product_id' => '3',
           ],
           [
               'id' => '4',
               'quantity' => '8',
               'product_id' => '4',
           ],
           [
               'id' => '5',
               'quantity' => '10',
               'product_id' => '5',
           ],
           [
               'id' => '6',
               'quantity' => '15',
               'product_id' => '6',
           ],
           [
               'id' => '7',
               'quantity' => '26',
               'product_id' => '7',
           ],
           [
               'id' => '8',
               'quantity' => '11',
               'product_id' => '8',
          ] ,
           [
               'id' => '9',
               'quantity' => '1',
               'product_id' => '9',
           ],
           [
               'id' => '10',
               'quantity' => '8',
               'product_id' => '10',
           ],
           [
               'id' => '11',
               'quantity' => '7',
               'product_id' => '11',
           ],
           [
               'id' => '12',
               'quantity' => '8',
               'product_id' => '12',
           ],
           [
               'id' => '13',
               'quantity' => '2',
               'product_id' => '13',
           ],
           [
               'id' => '14',
               'quantity' => '1',
               'product_id' => '14',
           ], [
               'id' => '15',
               'quantity' => '1',
               'product_id' => '15',
           ],
           [
               'id' => '16',
               'quantity' => '9',
               'product_id' => '16',
           ],
           [
               'id' => '17',
               'quantity' => '17',
               'product_id' => '17',
           ],
           [
               'id' => '18',
               'quantity' => '8',
               'product_id' => '18',
           ],
           [
               'id' => '19',
               'quantity' => '9',
               'product_id' => '19',
           ],
           [
               'id' => '20',
               'quantity' => '9',
               'product_id' => '20',
           ],
           [
               'id' => '21',
               'quantity' => '3',
               'product_id' => '21',
           ],
           [
               'id' => '22',
               'quantity' => '6',
               'product_id' => '22',
           ],
           [
               'id' => '23',
               'quantity' => '9',
               'product_id' => '23',
           ],
           [
               'id' => '24',
               'quantity' => '9',
               'product_id' => '24',
           ],
           [
               'id' => '25',
               'quantity' => '10',
               'product_id' => '25',
           ],
           [
               'id' => '26',
               'quantity' => '40',
               'product_id' => '26',
           ],
           [
               'id' => '27',
               'quantity' => '2',
               'product_id' => '27',
           ],
           [
               'id' => '28',
               'quantity' => '3',
               'product_id' => '28',
           ],
           [
               'id' => '29',
               'quantity' => '2',
               'product_id' => '29',
           ],
           [
               'id' => '30',
               'quantity' => '1',
               'product_id' => '30',
           ],
           [
               'id' => '31',
               'quantity' => '9',
               'product_id' => '31',
           ],
           [
               'id' => '32',
               'quantity' => '10',
               'product_id' => '32',
           ],
           [
               'id' => '33',
               'quantity' => '2',
               'product_id' => '33',
           ],
           [
               'id' => '34',
               'quantity' => '3',
               'product_id' => '34',
           ],
           [
               'id' => '35',
               'quantity' => '3',
               'product_id' => '35',
           ],
           [
               'id' => '36',
               'quantity' => '6',
               'product_id' => '36',
           ]

       ]);
       }
   }
