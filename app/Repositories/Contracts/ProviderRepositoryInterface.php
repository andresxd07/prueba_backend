<?php

namespace App\Repositories\Contracts;

Interface ProviderRepositoryInterface
{
    public function getProvidersWithProducts();

    public function providerbyId($id);

}
