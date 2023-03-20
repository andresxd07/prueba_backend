<?php

namespace App\Repositories;

use App\Models\Order_Product;
use App\Repositories\Contracts\ProductRepositoryInterface;


class ProductRepository implements ProductRepositoryInterface
{

    public function sumProducts()
    {
        $productsSum = Order_Product::selectRaw('product_name, SUM(quantity) as require_products')
        ->groupBy('product_name')
        ->get();

        return response()->json($productsSum);
      }
    }


