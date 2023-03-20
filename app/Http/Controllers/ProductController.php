<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductController extends Controller {


    private ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
     /**
   * @return \Illuminate\Http\Responsejson
    * Productos requeridos
    */
      public function sumProducts()
      {
          $product = $this->productRepository->sumProducts();
          return response()->json($product);
      }
}
