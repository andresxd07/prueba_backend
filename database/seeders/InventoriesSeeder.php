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
              'id' => 1,
              'product_name' => 'Leche',
               'quantity' => 3,
               'product_id' => 1,
           ],
           [
               'id' => 2,
               'product_name' => 'Huevos',
               'quantity' => 3,
               'product_id' => 2,
           ],
           [
               'id' => 3,
               'product_name' => 'Manzana Verde',
               'quantity' => 7,
               'product_id' => 3,
           ],
           [
               'id' => 4,
               'product_name' => 'Pepino Cohombro',
               'quantity' => 8,
               'product_id' => 4,
           ],
           [
               'id' => 5,
               'product_name' => 'Pimenton Rojo',
               'quantity' => 10,
               'product_id' => 5,
           ],
           [
               'id' => 6,
               'product_name' => 'Kiwi',
               'quantity' => 15,
               'product_id' => 6,
           ],
           [
               'id' => 7,
               'product_name' => 'Cebolla Cabezona Blanca Limpia',
               'quantity' => 26,
               'product_id' => 7,
           ],
           [
               'id' => 8,
               'product_name' => 'Habichuela',
               'quantity' => 11,
               'product_id' => 8,
          ] ,
           [
               'id' => 9,
               'product_name' => 'Mango Tommy Maduro',
               'quantity' => 1,
               'product_id' => 9,
           ],
           [
               'id' => 10,
               'product_name' => 'Tomate Chonto',
               'quantity' => 8,
               'product_id' => 10,
           ],
           [
               'id' => 11,
               'product_name' => 'Zanahoria Grande',
               'quantity' => 7,
               'product_id' => 11,
           ],
           [
               'id' => 12,
               'product_name' => 'Aguacate Maduro',
               'quantity' => 8,
               'product_id' => 12,
           ],
           [
               'id' => 13,
               'product_name' => 'Kale o Col Rizada',
               'quantity' => 2,
               'product_id' => 13,
           ],
           [
               'id' => 14,
               'product_name' => 'Cebolla Cabezona Roja Limpia',
               'quantity' => 1,
               'product_id' => 14,
           ],
            [
               'id' => 15,
               'product_name' => 'Tomate Chonto Maduro',
               'quantity' => 1,
               'product_id' => 15,
           ],
           [
               'id' => 16,
               'product_name' => 'Acelga',
               'quantity' => 9,
               'product_id' => 16,
           ],
           [
               'id' => 17,
               'product_name' => 'Espinaca Bogotana',
               'quantity' => 17,
               'product_id' => 17,
           ],
           [
               'id' => 18,
               'product_name' => 'Ahuyama',
               'quantity' => 8,
               'product_id' => 18,
           ],
           [
               'id' => 19,
               'product_name' => 'Cebolla Cabezona Sin Pelar',
               'quantity' => 9,
               'product_id' => 19,
           ],
           [
               'id' => 20,
               'product_name' => 'Mel\u00f3n',
               'quantity' => 9,
               'product_id' => 20,
           ],

           [
               'id' => 21,
               'product_name' => 'Cebolla Cabezona Roja Sin Pelar',
               'quantity' => 3,
               'product_id' => 21,
           ],
           [
               'id' => 22,
               'product_name' => 'Cebolla Larga Junca',
               'quantity' => 6,
               'product_id' => 22,
           ],
           [
               'id' => 23,
               'product_name' => 'Hierbabuena',
               'quantity' => 9,
               'product_id' => 23,
           ],
           [
               'id' => 24,
               'product_name' => 'Lechuga Crespa Verde',
               'quantity' => 9,
               'product_id' => 24,
           ],
           [
               'id' => 25,
               'product_name' => 'Lim\u00f3n Tahit\u00ed',
               'quantity' => 10,
               'product_id' => 25,
           ],
           [
               'id' => 26,
               'product_name' => 'Mora de Castilla',
               'quantity' => 40,
               'product_id' => 26,
           ],
           [
               'id' => 27,
               'product_name' => 'Pimenton Verde',
               'quantity' => 2,
               'product_id' => 27,
           ],
           [
               'id' => 28,
               'product_name' => 'Tomate Larga Vida Maduro',
               'quantity' => 3,
               'product_id' => 28,
           ],
           [
               'id' => 29,
               'product_name' => 'Cilantro',
               'quantity' => 2,
               'product_id' => 29,
           ],
           [
               'id' => 30,
               'product_name' => 'Fresa jugo',
               'quantity' => 1,
               'product_id' => 30,
           ],
           [
               'id' => 31,
               'product_name' => 'Papa R-12 Madura',
               'quantity' => 9,
               'product_id' => 31,
           ],
           [
               'id' => 32,
               'product_name' => 'Curuva',
               'quantity' => 10,
               'product_id' => 32,
           ],
           [
               'id' => 33,
               'product_name' => 'Br\u00f3coli',
               'quantity' => 2,
               'product_id' => 33,
           ],
           [
               'id' => 34,
               'product_name' => 'Aguacate Hass Pint\u00f3n',
               'quantity' => 3,
               'product_id' => 34,
           ],
           [
               'id' => 35,
               'product_name' => 'Aguacate Hass Maduro',
               'quantity' => 3,
               'product_id' => 35,
           ],
           [
               'id' => 36,
               'product_name' => 'Aguacate Pint\u00f3n',
               'quantity' => 6,
               'product_id' => 36,
           ]

       ]);
       }
   }
