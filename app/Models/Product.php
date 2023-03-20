<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'products';

  public function orders() {
    return $this->belongsToMany('App\Models\Order', 'orders_products');
  }

  public function providers() {
    return $this->belongsToMany('App\Models\Provider', 'providers_products');
  }

  public function inventories() {
    return $this->hasMany('App\Models\Inventory');
}


}
