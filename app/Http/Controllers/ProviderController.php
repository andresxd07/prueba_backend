<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ProviderRepositoryInterface;

class ProviderController extends Controller {

    private ProviderRepositoryInterface $providerRepository;

    public function __construct(ProviderRepositoryInterface $providerRepository)
    {
        $this->providerRepository = $providerRepository;
    }
     /**
    * @return \Illuminate\Http\Responsejson
    * Consultar los productos que deben ser alistados por transportadores, y a qué transportador le corresponde cada pedido.
    */
    public function index()
    {
        $provider = $this->providerRepository->getProvidersWithProducts();
        return response()->json($provider);
    }
    /**
   * @return \Illuminate\Http\Responsejson
   * Consultar las ordenes que deben ser abastecidas por los provedores con el id de la tabla provides_products
   */
    public function providerbyId($provider)
    {
        $provider = $this->providerRepository->providerbyId($provider);
        return response()->json($provider);
    }
}
