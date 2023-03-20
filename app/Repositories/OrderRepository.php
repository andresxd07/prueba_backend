<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\Order_Product;
use App\Repositories\Contracts\OrderRepositoryInterface;


class OrderRepository implements OrderRepositoryInterface
{

    public function getAllOrders()
    {
        return Order:: all();  //Consultar el inventario
    }

    public function productsLessSold()
    {
        $products = Order_Product::orderBy('quantity','ASC')->get();

        return response ()->json($products);
    }

    public function productsMostSold()
    {
        $products = Order_Product::orderBy('quantity','DESC')->get();

        return response ()->json($products);
    }

    public function orderById($order)
    {
        return Order::find($order);
    }



}
