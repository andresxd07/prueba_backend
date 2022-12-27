<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CarrierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carriers')->insert([[
               'id' => '1',
               'name' => 'Carrier 1',
           ],
           [
               'id' => '2',
               'name' => 'Carrier 2',
           ],
           [
               'id' => '3',
               'name' => 'Carrier 3',
           ]
       ]);
       }
   }
