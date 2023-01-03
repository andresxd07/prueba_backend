<?php

namespace App\Http\Controllers;

use App\Http\Resources\Inventory as InventoryResource;
use App\Repositories\Contracts\InventoryRepositoryInterface;

class InventoryController extends Controller {

    private InventoryRepositoryInterface $inventoryRepository;

    public function __construct(InventoryRepositoryInterface $inventoryRepository)
    {
        $this->inventoryRepository = $inventoryRepository;
    }
     /**
   * @return \Illuminate\Http\Response
   * Consultar el inventario y que productos hay en el
   */
    public function index()
    {
        {
            $inventories =  $this->inventoryRepository->getAllInventory();
            return InventoryResource::collection($inventories);
        }
    }
}
