<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model {

    protected $table = 'orders_products';

    protected $fillable = [
        'product_id',
        'quantity',
    ];

  public function products() {
    return $this->belongsToMany('App\Models\Product', 'orders_products')->orderBy('quantity');;
  }

}
