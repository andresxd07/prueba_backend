<?php

namespace App\Http\Controllers;

use App\Http\Resources\Carrier as CarrierResource;
use App\Repositories\Contracts\CarrierRepositoryInterface;

class CarrierController extends Controller {

    private CarrierRepositoryInterface $carrierRepository;

    public function __construct(CarrierRepositoryInterface $carrierRepository)
    {
        $this->carrierRepository = $carrierRepository;
    }
     /**
    * @return \Illuminate\Http\Response
    * Consultar los transportadores y los pedidos que le corresponden a cada uno
    */
    public function index()
    {
        {
            $carriers  =  $this->carrierRepository->getAllCarriers();
            return CarrierResource::collection($carriers);
        }

    }
}

