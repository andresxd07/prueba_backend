<?php

namespace App\Repositories;

use App\Models\Inventory;
use App\Repositories\Contracts\InventoryRepositoryInterface;


class InventoryRepository implements InventoryRepositoryInterface
{

    public function getAllInventory()
    {
        return Inventory:: all();  //Consultar el inventario
    }
}
