<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\ProductController;

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
Route::get('/carriers-orders', [CarrierController::class, 'index'])->name('carrier.index');
Route::get('/most-products-sold', [ProductController::class, 'getMostSelledProducts'])->name('product.getMostSelledProducts');
Route::get('/less-products-sold', [ProductController::class, 'getLessSelledProducts'])->name('product.getLesstSelledProducts');
Route::get('/products-availability', [ProductController::class, 'getProductsAvailability'])->name('product.getProductsAvailability');
Route::get('/inventory-updated', [ProductController::class, 'getInventaryAfterSales'])->name('product.getInventaryAfterSales');


