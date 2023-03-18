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


  public static function getInventaryAfterSales($date_sales = 2019-03-01, $date_revision = 2019-03-02) {
    return Product::leftJoin('orders_products', 'products.id', '=', 'orders_products.products_id')
      ->leftJoin('orders', 'orders_products.orders_id', '=', 'orders.id')
      ->leftJoin('inventories', 'inventories.products_id', '=', 'products.id')
      ->where([
        ['orders.delivery_date', '=', $date_sales],
        ['inventories.available_date', '=', $date_revision]
      ])
      ->selectRaw('products.id, products.name, (orders_products.quantity - inventories.quantity) as calculated_quantity')
      ->get();
}

}
