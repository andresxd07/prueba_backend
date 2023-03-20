<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'orders';

  public function products() {
    return $this->belongsToMany('App\Models\Product', 'orders_products');
  }

  public function carriers() {
    return $this->belongsToMany('App\Models\Carrier');
  }

}
