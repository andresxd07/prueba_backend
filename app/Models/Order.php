<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {


  public function products() {
    return $this->belongsToMany('App\Product', 'order_product');
  }

  public function carriers() {
    return $this->belongsToMany('App\Carrier', 'carrier_order');
  }

}
