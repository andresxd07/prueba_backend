<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'products';


  public function orders() {
    return $this->belongsToMany('App\Order', 'orders_products');
  }

  public function providers() {
    return $this->belongsToMany('App\Provider', 'providers_products');
  }

  public function inventories() {
    return $this->hasMany('App\Inventory');
}

public static function getOrderedSelledProductsByDate($date, $order) {
    return Product::leftJoin('orders_products', 'products.id', '=', 'orders_products.products_id')
      ->leftJoin('orders', 'orders_products.orders_id', '=', 'orders.id')
      ->where('orders.delivery_date', $date)
      ->orderBy('orders_products.quantity', $order)
      ->get(['products.id', 'products.name', 'orders_products.quantity']);
  }

  public static function getInventaryAfterSales($date_sales = 2019-03-01, $date_revision = 2019-03-02) {
    return Product::leftJoin('orders_products', 'products.id', '=', 'orders_products.products_id')
      ->leftJoin('orders', 'orders_products.orders_id', '=', 'orders.id')
      ->leftJoin('inventories', 'inventories.products_id', '=', 'products.id')
      ->where([
        ['orders.delivery_date', '=', $date_sales],
        ['inventory.available_date', '=', $date_revision]
      ])
      ->selectRaw('products.id, products.name, (orders_products.quantity - inventor.quantity) as calculated_quantity')
      ->get();

}

public static function getProductsAvailability($orders_id, $operator) {
    return Product::leftJoin('orders_products', 'products.id', '=', 'orders_products.products_id')
      ->leftJoin('orders', 'orders_products.orders_id', '=', 'orders.id')
      ->leftJoin('inventories', 'inventories.products_id', '=', 'products.id')
      ->where([
        ['orders.id', '=', $orders_id],
        ['orders_products.quantity', $operator, 'inventories.quantity']
      ])
      ->get(['products.id', 'products.name', 'orders_products.quantity as order_quantity', 'inventories.quantity as inventories_quantity']);
  }

}
