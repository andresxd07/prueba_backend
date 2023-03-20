<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\InventoryRepositoryInterface;

class InventoryController extends Controller {

    private InventoryRepositoryInterface $inventoryRepository;

    public function __construct(InventoryRepositoryInterface $inventoryRepository)
    {
        $this->inventoryRepository = $inventoryRepository;
    }
     /**
   * @return \Illuminate\Http\Responsejson
   * Consultar el inventario y que productos hay en el
   */
    public function index()
    {
            $inventory = $this->inventoryRepository->getAllInventory();
           return response()->json($inventory);
    }
    /**
    * @return \Illuminate\Http\Responsejson
     * Inventario actualizado
     */

    public function inventoryUpdate()
    {
            $inventory = $this->inventoryRepository->inventoryUpdate();
           return response()->json($inventory);
    }
     /**
    * @return \Illuminate\Http\Responsejson
     * Productos que se pueden abastecer mediante servicio de inventario
     */

    public function inventoryAvailable()
    {
        $inventory = $this->inventoryRepository->inventoryAvailable();
        return response()->json($inventory);
    }
}
