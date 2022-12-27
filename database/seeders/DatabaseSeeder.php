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
        $this->call(ProductSeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(ProviderSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(Order_ProductSeeder::class);

        $this->call(CarrierSeeder::class);
        $this->call(Carrier_OrderSeeder::class);
        $this->call(Provider_Product::class);

    }
}
