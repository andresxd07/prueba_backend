<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'orders';

  public function products() {
    return $this->belongsToMany('App\Product', 'orders_products');
  }

  public function carriers() {
    return $this->belongsToMany('App\Carrier', 'carriers_orders');
  }

}
