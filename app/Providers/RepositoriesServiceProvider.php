<?php

namespace App\Providers;

use App\Repositories\InventoryRepository;
use App\Repositories\ProviderRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use App\Repositories\Contracts\InventoryRepositoryInterface;
use App\Repositories\Contracts\OrderRepositoryInterface;
use App\Repositories\Contracts\ProviderRepositoryInterface;
use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider {

    protected $classes = [

        InventoryRepositoryInterface::class => InventoryRepository::class,
        OrderRepositoryInterface::class => OrderRepository::class,
        ProviderRepositoryInterface::class => ProviderRepository::class,
        ProductRepositoryInterface::class => ProductRepository::class,

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
