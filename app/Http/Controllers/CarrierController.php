<?php

namespace App\Http\Controllers;

use App\Http\Resources\Carrier as CarrierResource;
use Illuminate\Http\RedirectResponse;
use App\Repositories\Contracts\CarrierRepositoryInterface;

class Carrier extends Controller {

    private $carrierRepository;
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
            $carrier =  $this->carrierRepository->getAllCarriers();
            return CarrierResource::collection($carrier);
        }

    }
    /** *
     * @return RedirectResponse
    */
}

