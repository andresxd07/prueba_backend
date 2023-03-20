<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\OrderRepositoryInterface;

class OrderController extends Controller {

    private OrderRepositoryInterface $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
     /**
   * @return \Illuminate\Http\Responsejson
   * Consultar todas las ordenes
   */
    public function index()
    {
           $order = $this->orderRepository->getAllOrders();
           return response()->json($order);
    }

/**
 *  @return \Illuminate\Http\Responsejson
 *  Muestra los productos menos vendidos
*/
    public function productsLessSold()
    {
           $order = $this->orderRepository->productsLessSold();
           return response()->json($order);
    }

/**
 *    @return \Illuminate\Http\Responsejson
 *    Muestra los productos mas vendidos
 */
    public function productsMostSold()
    {
            $order = $this->orderRepository->productsMostSold();
            return response()->json($order);
    }

/**
 *  @return \Illuminate\Http\Responsejson
 * Muestra una orden consultando por su id
*/
    public function orderById(int $order)
    {
        $order = $this->orderRepository->orderById($order);
        return response()->json($order);
    }
}



