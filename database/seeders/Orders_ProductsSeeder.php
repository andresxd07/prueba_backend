<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Orders_ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_products')->insert([[
            'id' => '1',
            'order_id' => '1',
            'product_id' => '1',
            'quantity' => '1',
         ],
         [
            'id' => '2',
            'order_id' => '1',
            'product_id' => '2',
            'quantity' => '21',
         ],
         [
            'id' => '3',
            'order_id' => '1',
            'product_id' => '37',
            'quantity' => '7',
         ],
         [
            'id' => '4',
            'order_id' => '1',
            'product_id' => '3',
            'quantity' => '10',
         ],
         [
            'id' => '5',
            'order_id' => '1',
            'product_id' => '4',
            'quantity' => '5',
         ],
         [
            'id' => '6',
            'order_id' => '2',
            'product_id' => '5',
            'quantity' => '100',
         ],
         [
            'id' => '7',
            'order_id' => '2',
            'product_id' => '6',
            'quantity' => '60',
         ],
         [
            'id' => '8',
            'order_id' => '3',
            'product_id' => '7',
            'quantity' => '4',
         ],
         [
            'id' => '9',
            'order_id' => '3',
            'product_id' => '8',
            'quantity' => '3',
         ],
         [
            'id' => '10',
            'order_id' => '3',
            'product_id' => '9',
            'quantity' => '4',
         ],
         [
            'id' => '11',
            'order_id' => '3',
            'product_id' => '10',
            'quantity' => '8',
         ],
         [
            'id' => '12',
            'order_id' => '3',
            'product_id' => '11',
            'quantity' => '5',
         ],
         [
            'id' => '13',
            'order_id' => '4',
            'product_id' => '12',
            'quantity' => '3',
         ],
         [
            'id' => '14',
            'order_id' => '4',
            'product_id' => '13',
            'quantity' => '2',
         ],
         [
            'id' => '15',
            'order_id' => '4',
            'product_id' => '14',
            'quantity' => '4',
         ],
         [
            'id' => '16',
            'order_id' => '4',
            'product_id' => '4',
            'quantity' => '2',
         ],
         [
            'id' => '17',
            'order_id' => '4',
            'product_id' => '15',
            'quantity' => '3',
         ],
         [
            'id' => '18',
            'order_id' => '5',
            'product_id' => '16',
            'quantity' => '1500',
         ],
         [
            'id' => '19',
            'order_id' => '6',
            'product_id' => '17',
            'quantity' => '2',
         ],
         [
            'id' => '20',
            'order_id' => '6',
            'product_id' => '18',
            'quantity' => '3',
         ],
         [
            'id' => '21',
            'order_id' => '6',
            'product_id' => '15',
            'quantity' => '2',
         ],
         [
            'id' => '22',
            'order_id' => '6',
            'product_id' => '19',
            'quantity' => '2',
         ],
         [
            'id' => '23',
            'order_id' => '6',
            'product_id' => '20',
            'quantity' => '3',
         ],
         [
            'id' => '24',
            'order_id' => '7',
            'product_id' => '21',
            'quantity' => '3',
         ],
         [
            'id' => '25',
            'order_id' => '7',
            'product_id' => '22',
            'quantity' => '2',
         ],
         [
            'id' => '26',
            'order_id' => '7',
            'product_id' => '23',
            'quantity' => '2',
         ],
         [
            'id' => '27',
            'order_id' => '7',
            'product_id' => '39',
            'quantity' => '4',
         ],
         [
            'id' => '28',
            'order_id' => '7',
            'product_id' => '24',
            'quantity' => '15',
         ],
         [
            'id' => '29',
            'order_id' => '8',
            'product_id' => '25',
            'quantity' => '3',
         ],
         [
            'id' => '30',
            'order_id' => '8',
            'product_id' => '26',
            'quantity' => '2',
         ],
         [
            'id' => '31',
            'order_id' => '8',
            'product_id' => '22',
            'quantity' => '4',
         ],
         [
            'id' => '32',
            'order_id' => '8',
            'product_id' => '27',
            'quantity' => '1',
         ],
         [
            'id' => '33',
            'order_id' => '8',
            'product_id' => '5',
            'quantity' => '1',
         ],
         [
            'id' => '34',
            'order_id' => '9',
            'product_id' => '22',
            'quantity' => '1',
         ],
         [
            'id' => '35',
            'order_id' => '10',
            'product_id' => '7',
            'quantity' => '1',
         ],
         [
            'id' => '36',
            'order_id' => '11',
            'product_id' => '41',
            'quantity' => '1',
         ],
         [
            'id' => '37',
            'order_id' => '11',
            'product_id' => '19',
            'quantity' => '6',
         ],
         [
            'id' => '38',
            'order_id' => '11',
            'product_id' => '29',
            'quantity' => '1',
         ],
         [
            'id' => '39',
            'order_id' => '11',
            'product_id' => '17',
            'quantity' => '1',
         ],
         [
            'id' => '40',
            'order_id' => '11',
            'product_id' => '30',
            'quantity' => '1',
         ],
         [
            'id' => '41',
            'order_id' => '12',
            'product_id' => '7',
            'quantity' => '1',
         ],
         [
            'id' => '42',
            'order_id' => '12',
            'product_id' => '25',
            'quantity' => '2',
         ],
         [
            'id' => '43',
            'order_id' => '12',
            'product_id' => '5',
            'quantity' => '1',
         ],
         [
            'id' => '44',
            'order_id' => '12',
            'product_id' => '31',
            'quantity' => '25',
         ],
         [
            'id' => '45',
            'order_id' => '13',
            'product_id' => '43',
            'quantity' => '1',
         ],
         [
            'id' => '46',
            'order_id' => '13',
            'product_id' => '30',
            'quantity' => '1',
         ],
         [
            'id' => '47',
            'order_id' => '13',
            'product_id' => '32',
            'quantity' => '1',
         ],
         [
            'id' => '48',
            'order_id' => '13',
            'product_id' => '33',
            'quantity' => '1',
         ],
         [
            'id' => '49',
            'order_id' => '13',
            'product_id' => '28',
            'quantity' => '2',
         ],
         [
            'id' => '50',
            'order_id' => '14',
            'product_id' => '16',
            'quantity' => '3',
         ],
         [
            'id' => '51',
            'order_id' => '14',
            'product_id' => '34',
            'quantity' => '3',
         ],
         [
            'id' => '52',
            'order_id' => '14',
            'product_id' => '35',
            'quantity' => '3',
         ],
         [
            'id' => '53',
            'order_id' => '14',
            'product_id' => '12',
            'quantity' => '1',
         ],
         [
            'id' => '54',
            'order_id' => '14',
            'product_id' => '36',
            'quantity' => '1',
         ],
         [
            'id' => '55',
            'order_id' => '15',
            'product_id' => '28',
            'quantity' => '1',
         ]
     ]);
     }
 }
