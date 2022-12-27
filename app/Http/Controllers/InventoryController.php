<?php

namespace App\Http\Controllers;

use App\Http\Resources\Inventory as InventoryResource;
use Illuminate\Http\RedirectResponse;
use App\Repositories\Contracts\InventoryRepositoryInterface;

class InventoryController extends Controller {

    private $inventoryRepository;
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
            $inventory =  $this->inventoryRepository->getAllInventory();
            return InventoryResource::collection($inventory);
        }
    }
    /** *
     * @return RedirectResponse
    */
}
