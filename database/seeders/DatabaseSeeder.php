<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductsSeeder::class);
        $this->call(InventoriesSeeder::class);
        $this->call(ProvidersSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(Orders_ProductsSeeder::class);
        $this->call(CarriersSeeder::class);
        $this->call(Carriers_OrdersSeeder::class);
        $this->call(Providers_ProductsSeeder::class);
    }
}
