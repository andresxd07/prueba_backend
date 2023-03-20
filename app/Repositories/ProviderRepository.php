<?php

namespace App\Repositories;

use App\Models\Provider;
use App\Repositories\Contracts\ProviderRepositoryInterface;


class ProviderRepository implements ProviderRepositoryInterface
{

    public function getProvidersWithProducts()
    {
        return Provider:: all();
    }

    public function providerbyId($provider)
    {
        return Provider::find($provider);
    }

}
