<?php

namespace App\Repositories;

use App\Models\Carrier;
use App\Repositories\Contracts\CarrierRepositoryInterface;


class CarrierRepository implements CarrierRepositoryInterface
{

    public function getAllCarriers()
    {
        return Carrier:: all();  //Consulta todos los transportadores
    }

}
