<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Providers_ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('providers_products')->insert([[
            'product_id' => 2,
            'provider' => "Ruby",
            'product_name' => "Huevos",
            'provider_quantity' => 18,
     ],
     [
        'product_id' => 3,
        'provider' => "Ruby",
        'product_name' => "Manzana Verde",
        'quantity' => 3,
     ],
     [
        'product_id' => 5,
        'provider' => "Ruby",
        'product_name' => "Pimenton Rojo",
        'quantity' => 92,
     ],
     [
        'product_id' => 6,
        'provider' => "Angelica",
        'product_name' => "Kiwi",
        'quantity' => 45,
     ],
     [
        'product_id' => 9,
        'provider' => "Angelica",
        'product_name' => "Mango Tommy Maduro",
        'quantity' => 3,
     ],
     [
        'product_id' => 14,
        'provider' => "Angelica",
        'product_name' => "Cebolla Cabezona Roja Limpia",
        'quantity' => 4,
     ],
     [
        'product_id' => 15,
        'provider' => "Angelica",
        'product_name' => "Tomate Chonto Maduro",
        'quantity' => 4,
     ],
     [
        'product_id' => 16,
        'provider' => "Raul",
        'product_name' => "Acelga",
        'quantity' => 1494,
     ],
     [
        'product_id' => 22,
        'provider' => "Angelica",
        'product_name' => "Cebolla Larga Junca",
        'quantity' => 1,
     ],
     [
        'product_id' => 24,
        'provider' => "Ruby",
        'product_name' => "Lechuga Crespa Verde",
        'quantity' => 6,
     ],
     [
        'product_id' => 30,
        'provider' => "Raul",
        'product_name' => "Fresa Jugo",
        'quantity' => 1,
     ],
     [
        'product_id' => 31,
        'provider' => "Raul",
        'product_name' => "Papa R-12 Madura",
        'quantity' => 16,
     ],
     [
        'id' => 37,
        'provider' => "Ruby",
        'product_name' => "Pan Bimbo",
        'quantity' => 7,
     ],
     [
        'product_id' => 39,
        'provider' => "Ruby",
        'product_name' => "Lechuga Crespa Morada",
        'quantity' => 4,
     ],
     [
        'product_id' => 41,
        'provider' => "Raul",
        'product_name' => "Banano",
        'quantity' => 1,
     ],
 ]);
 }
}
