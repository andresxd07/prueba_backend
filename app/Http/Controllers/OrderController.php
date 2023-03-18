<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_Product;
use App\Models\Inventory;

class OrderController extends Controller {

//private OrderRepositoryInterface $orderRepository;

//public function __construct(OrderRepositoryInterface $orderRepository)
/**
 * Muestra la lista de los pedidos*/
// {
//     $this->orderRepository = $orderRepository;
// }
//  /**
// * @return \Illuminate\Http\Response
// * Consultar las ordenes
// */
// public function index()
// {
//     {
//         $order = $this->orderRepository->getallOrders();

//     return response()->json($order);

//     }
//     }
  /**
    * @return \Illuminate\Http\Response
    * Consultar los ordenes 
    */
    public function index()
    {
        return Order::all();
    }

/**  Muestra los productos y su respectiva cantidad que hay en las ordenes
*/
    public function productsSold()
    {
        $products = Order_Product::select(['product_id', 'quantity'])->get();
        return response ()->json($products);
    }

/**  Muestra los productos menos vendidos
 *
*/
    public function productsLessSold()
    {
        $products = Order_Product::orderBy('quantity','ASC')->get();
        return response ()->json($products);
    }


/**Muestra los productos mas vendidos */

    public function productsMostSold()
    {
        $products = Order_Product::orderBy('quantity','DESC')->get();
        return response ()->json($products);
    }

/**Muestra una orden */
    public function orderById($order){
        return Order::find($order);
    }
}



