<?php

namespace App\Repositories\Contracts;

Interface InventoryRepositoryInterface
{
    public function getAllInventory();

    public function inventoryUpdate();

    public function inventoryAvailable();

}
