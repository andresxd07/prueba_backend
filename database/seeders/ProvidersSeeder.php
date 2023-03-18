<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->insert([[
               'id' => 1,
               'name' => 'Ruby',
           ],
           [
               'id' => 2,
               'name' => 'Raul',
           ],
           [
               'id' => 3,
               'name' => 'Angelica',
           ]
       ]);
       }
   }
