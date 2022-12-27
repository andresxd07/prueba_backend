<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([[
              'id' => '1',
              'priority' => '1',
              'address' => 'KR 14 # 87 - 20 ',
              'nameClient' => 'Sofia'
           ],
           [
            'id' => '2',
            'priority' => '1',
            'address' => 'KR 20 # 164A - 5',
            'nameClient' => 'Angel'
         ],
         [
            'id' => '3',
            'priority' => '3',
            'address' => 'KR 13 # 74 - 38 ',
            'nameClient' => 'Hocks'
         ],
         [
            'id' => '4',
            'priority' => '1',
            'address' => 'CL 93 # 12 - 9 ',
            'nameClient' => 'Michael'
         ],
         [
            'id' => '5',
            'priority' => '1',
            'address' => 'CL 71 # 3 - 74 ',
            'nameClient' => 'Bar de Alex'
         ],
         [
            'id' => '6',
            'priority' => '2',
            'address' => 'KR 20 # 134A - 5 ',
            'nameClient' => 'Sabor Criollo'
         ],
         [
            'id' => '7',
            'priority' => '2',
            'address' => 'CL 80 # 14 - 38',
            'nameClient' => 'El Pollo Rojo'
         ],
         [
            'id' => '8',
            'priority' => '7',
            'address' => 'KR 14 # 98 - 74 ',
            'nameClient' => 'All Salad'
         ] ,
         [
            'id' => '9',
            'priority' => '1',
            'address' => 'KR 58 # 93 - 1',
            'nameClient' => 'Parrilla y Sabor'
         ],
         [
            'id' => '15',
            'priority' => '9',
            'address' => 'KR 14 # 87 - 20',
            'nameClient' => 'Sofia'
         ],
         [
            'id' => '10',
            'priority' => '1',
            'address' => 'CL 93B # 17 - 12 ',
            'nameClient' => 'Restaurante Yerbabuena'
         ],
         [
            'id' => '11',
            'priority' => '10',
            'address' => 'KR 68D # 98A - 11',
            'nameClient' => 'Luis David'
         ],
         [
            'id' => '12',
            'priority' => '2',
            'address' => 'AC 72 # 20 - 45',
            'nameClient' => 'David Carruyo'
         ],
         [
            'id' => '13',
            'priority' => '3',
            'address' => 'KR 22 # 122 - 57',
            'nameClient' => 'Mario'
         ], [
            'id' => '14',
            'priority' => '8',
            'address' => 'KR 88 # 72A - 26',
            'nameClient' => 'Harold'
         ]
       ]);
       }
   }

