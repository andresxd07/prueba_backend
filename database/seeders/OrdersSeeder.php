<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([[
              'id' => 1,
              'priority' => 1,
              'address' => 'KR 14 # 87 - 20 ',
              'name_client' => 'Sofia'
           ],
           [
            'id' => 2,
            'priority' => 1,
            'address' => 'KR 20 # 164A - 5',
            'name_client' => 'Angel'
         ],
         [
            'id' => 3,
            'priority' => 3,
            'address' => 'KR 13 # 74 - 38 ',
            'name_client' => 'Hocks'
         ],
         [
            'id' => 4,
            'priority' => 1,
            'address' => 'CL 93 # 12 - 9 ',
            'name_client' => 'Michael'
         ],
         [
            'id' => 5,
            'priority' => 1,
            'address' => 'CL 71 # 3 - 74 ',
            'name_client' => 'Bar de Alex'
         ],
         [
            'id' => 6,
            'priority' => 2,
            'address' => 'KR 20 # 134A - 5 ',
            'name_client' => 'Sabor Criollo'
         ],
         [
            'id' => 7,
            'priority' => 2,
            'address' => 'CL 80 # 14 - 38',
            'name_client' => 'El Pollo Rojo'
         ],
         [
            'id' => 8,
            'priority' => 7,
            'address' => 'KR 14 # 98 - 74 ',
            'name_client' => 'All Salad'
         ] ,
         [
            'id' => 9,
            'priority' => 1,
            'address' => 'KR 58 # 93 - 1',
            'name_client' => 'Parrilla y Sabor'
         ],
         [
            'id' => 15,
            'priority' => 9,
            'address' => 'KR 14 # 87 - 20',
            'name_client' => 'Sofia'
         ],
         [
            'id' => 10,
            'priority' => 1,
            'address' => 'CL 93B # 17 - 12 ',
            'name_client' => 'Restaurante Yerbabuena'
         ],
         [
            'id' => 11,
            'priority' => 10,
            'address' => 'KR 68D # 98A - 11',
            'name_client' => 'Luis David'
         ],
         [
            'id' => 12,
            'priority' => 2,
            'address' => 'AC 72 # 20 - 45',
            'name_client' => 'David Carruyo'
         ],
         [
            'id' => 13,
            'priority' => 3,
            'address' => 'KR 22 # 122 - 57',
            'name_client' => 'Mario'
         ], [
            'id' => 14,
            'priority' => 8,
            'address' => 'KR 88 # 72A - 26',
            'name_client' => 'Harold'
         ]
       ]);
       }
   }

