<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('/orders', [OrderController::class, 'index'])->name('order.index');
Route::get('/products-sold', [OrderController::class, 'productsSold'])->name('order.productsSold');
Route::get('/products-less-sold', [OrderController::class, 'productsLessSold'])->name('order.productsLessSold');
Route::get('/order/{order}', [OrderController::class, 'orderByid'])->name('order.orderByid');
Route::get('/carrier-orders', [CarrierController::class, 'index'])->name('carrier.index');
Route::get('/products-most-sold', [OrderController::class, 'productsMostSold'])->name('product.productsMostSold');
Route::get('/inventory-updated', [ProductController::class, 'getInventaryAfterSales'])->name('product.getInventaryAfterSales');


