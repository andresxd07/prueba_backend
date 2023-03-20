<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProviderController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index'); // Consulta el inventario con productos requeridos,faltantes, cantidad, nombre y id
Route::get('/orders', [OrderController::class, 'index'])->name('order.index'); // Consulta todas las ordenes con su direccion, prioridad, nombre de cliente y fecha
Route::get('/products-less-sold', [OrderController::class, 'productsLessSold'])->name('order.productsLessSold'); // Consulta los productos menos vendidos
Route::get('/order/{order}', [OrderController::class, 'orderByid'])->name('order.orderByid'); // Consulta las ordenes dependiendo de su id ejemplo api/order/3
Route::get('/products-most-sold', [OrderController::class, 'productsMostSold'])->name('product.productsMostSold'); // Consulta los productos mas vendidos
Route::get('/providers-products', [ProviderController::class, 'index'])->name('product.getProvidersWithProducts'); // Consulta los productos,la cantidad que debe ser abastecida por los provedores y a que provedor le pertenece cada producto
Route::get('/productsSum', [ProductController::class, 'sumProducts'])->name('product.sumProducts'); // Suma todos los productos y los agrupa por su respectivo nombre
Route::get('/inventory-update', [InventoryController::class, 'inventoryUpdate'])->name('inventory.inventoryUpdate'); // Inventario actualizado para el sigueinte dia teniendo en cuenta como quedo el inventario con las ordenes realizadas
Route::get('/provider/{provider}', [ProviderController::class, 'providerbyId'])->name('provider.providerbyId'); // Consulta los productos, el provedor y la cantidad que debe abastecer dado el id de la tabla providers_products
Route::get('/inventory-available', [InventoryController::class, 'inventoryAvailable'])->name('inventory.inventoryAvailable'); // Consulta los productos que pueden ser abastecidos desde el inventario






