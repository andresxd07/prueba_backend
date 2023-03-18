<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
            'name' => 'Leche',
            'id' => 1,

        ],
        [
            'name' => 'Huevos',
            'id' => 2,
        ],
        [
            'name' => 'Manzana Verde',
            'id' => 3,
        ],
        [
            'name' => 'Pepino Cohombro',
            'id' => 4,
        ],
        [
            'name' => 'Pimenton Rojo',
            'id' => 5,
        ],
        [
            'name' => 'Kiwi',
            'id' => 6,
        ],
        [
            'name' => 'Cebolla Cabezona Blanca Limpia',
            'id' => 7,
        ],
        [
            'name' => 'Habichuela',
            'id' => 8,
       ] ,
        [
            'name' => 'Mango Tommy Maduro',
            'id' => 9,
        ],
        [
            'name' => 'Tomate Chonto',
            'id' => 10,
        ],
        [
            'name' => 'Zanahoria Grande',
            'id' => 11,
        ],
        [
            'name' => 'Aguacate Maduro',
            'id' => 12,
        ],
        [
            'name' => 'Kale o Col Rizada',
            'id' => 13,
        ],
        [
            'name' => 'Cebolla Cabezona Roja Limpia',
            'id' => 14,
        ], [
            'name' => 'Tomate Chonto Maduro',
            'id' => 15,
        ],
        [
            'name' => 'Acelga',
            'id' => 16,
        ],
        [
            'name' => 'Espinaca Bogotana',
            'id' => 17,
        ],
        [
            'name' => 'Ahuyama',
            'id' => 18,
        ],
        [
            'name' => 'Cebolla Cabezona Blanca Sin Pelar',
            'id' => 19,
        ],
        [
            'name' => 'Mel\u00f3n',
            'id' => 20,
        ],
        [
            'name' => 'Cebolla Cabezona Roja Sin Pelar',
            'id' => 21,
        ],
        [
            'name' => 'Cebolla Larga Junca',
            'id' => 22,
        ],
        [
            'name' => 'Hierbabuena',
            'id' => 23,
        ],
        [
            'name' => 'Lechuga Crespa Verde',
            'id' => 24,
        ],
        [
            'name' => 'Lim\u00f3n Tahit\u00ed',
            'id' => 25,
        ],
        [
            'name' => 'Mora De Castilla',
            'id' => 26,
        ],
        [
            'name' => 'Pimenton Verde',
            'id' => 27,
        ],
        [
            'name' => 'Tomate Larga Vida Maduro',
            'id' => 28,
        ],
        [
            'name' => 'Cilantro',
            'id' => 29,
        ],
        [
            'name' => 'Fresa Jugo',
            'id' => 30,
        ],
        [
            'name' => 'Papa R-12 Madura',
            'id' => 31,
        ],
        [
            'name' => 'Curuva',
            'id' => 32,
        ],
        [
            'name' => 'Br\u00f3coli',
            'id' => 33,
        ],
        [
            'name' => 'Aguacate Hass Pint\u00f3n',
            'id' => 34,
        ],
        [
            'name' => 'Aguacate Hass Maduro',
            'id' => 35,
        ],
        [
            'name' => 'Aguacate Pint\u00f3n',
            'id' => 36,
        ],
        [
            'name' => 'Pan Bimbo',
            'id' => 37,
        ],
        [
            'name' => 'Lechuga Crespa Morada',
            'id' => 39,
        ],
        [
            'name' => 'Banano',
            'id' => 41,
        ],
        [
            'name' => 'Banano',
            'id' => 43,
        ]
    ]);
    }
}
