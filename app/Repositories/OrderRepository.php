<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\Contracts\OrderRepositoryInterface;


class OrderRepository implements OrderRepositoryInterface
{

    public function getAllOrders()
    {
        return Order:: all();  //Consultar el inventario
    }
}
