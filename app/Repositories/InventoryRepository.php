<?php

namespace App\Repositories;

use App\Models\Inventory;
use App\Repositories\Contracts\InventoryRepositoryInterface;

class InventoryRepository implements InventoryRepositoryInterface
{
    public function getAllInventory()
    {
        return Inventory:: all();
    }

    public function inventoryUpdate()
    {
        $inventoryrest = Inventory::selectRaw('product_name, SUM(quantity - require_products) as inventario')        ->groupBy('product_name')
        ->get();

        return response()->json($inventoryrest);
    }

    public function inventoryAvailable()
    {
        $inventory = Inventory::where('missing', '0')->get();

        return response()->json($inventory);
    }
}
