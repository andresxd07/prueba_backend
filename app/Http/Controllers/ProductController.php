<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use Illuminate\Support\Facades\Validator;

class ProductController extends Controller {

      /**
   * @return \Illuminate\Http\Response
   * Consultar los productos mas vendidos es decir, en forma ascendente
   */
  public function getLessSelledProducts(Request $request) {
    return $this->getOrderedProductsSoldByDate($request, "ASC");
  }
  /**
   * @return \Illuminate\Http\Response
   * Consultar que productos hay disponibles y cuales no
   */

  public function getProductsAvailability(Request $request) {

    $validator = Validator::make($request->all(), [
      'order_id' => 'required'
    ]);

    if ($validator->fails()) {
      return response()->json(['errors' => $validator->errors()], 400);
    }

    else {

      $products_available = Product::getProductsAvailability($request->get('order_id'), '<=');

      $products_non_available = Product::getProductsAvailability($request->get('order_id'), '>');

      return [
        "available" => $products_available,
        "non-available" => $products_non_available
      ];
    }
  }

  /**
   * Consultar los pedidos actualizados en el inventario, dadas dos fechas
   *
   * @return \Illuminate\Http\Response
   */
  public function getInventaryAfterSales(Request $request) {
    $validator = Validator::make($request->all(), [
      'date_sales' => 'required',
      'date_revision' => 'required'
    ]);
    if ($validator->fails()) {
      return response()->json(['errors' => $validator->errors()], 400);
    }
    else {
      $products = Product::getInventaryAfterSales($request->get('date_sales'), $request->get('date_revision'));
      return $products;
    }
  }

  /**
   * Productos ordenados por fecha
   *
   * @return \Illuminate\Http\Response
   */
  public function getOrderedProductsSoldByDate(Request $request, $order) {

    $validator = Validator::make($request->all(), [
      'date' => 'required'
    ]);
    if ($validator->fails()) {
      return response()->json(['errors' => $validator->errors()], 400);
    }
    else {
      $products = Product::getOrderedSelledProductsByDate($request->get('date'), $order);
      return $products;
    }
  }
    /**
   * @return \Illuminate\Http\Response
   * Consultar los productos mas vendidos, es decir en forma descendente
   */
  public function getMostSelledProducts(Request $request) {
    return $this->getOrderedProductsSoldByDate($request, "DESC");
  }

}
