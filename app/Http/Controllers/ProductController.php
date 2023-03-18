<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller {

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

}
