<?php

namespace App\Providers;

use App\Repositories\InventoryRepository;
use App\Repositories\CarrierRepository;
use App\Repositories\Contracts\InventoryRepositoryInterface;
use App\Repositories\Contracts\CarrierRepositoryInterface;
use App\Repositories\Contracts\OrderRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider {

    protected $classes = [

        InventoryRepositoryInterface::class => InventoryRepository::class,
        CarrierRepositoryInterface::class => CarrierRepository::class,
        OrderRepositoryInterface::class => OrderRepository::class,

    ];


    public function register()
    {
        foreach ($this->classes as $interface => $implementation) {
            $this->app->singleton($interface, $implementation);
        }
    }

    /**
     * @return array
     */
    public function provides()
    {
        return array_keys($this->classes);
    }
}
