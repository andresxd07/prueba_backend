<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

  public function orders() {
    return $this->belongsToMany('App\Order', 'order_product');
  }

  public function providers() {
    return $this->belongsToMany('App\Provider', 'provider_product');
  }

  public function inventories() {
    return $this->hasMany('App\Inventory');
}

public static function getOrderedSelledProductsByDate($date, $order) {
    return Product::leftJoin('order_product', 'products.id', '=', 'order_product.product_id')
      ->leftJoin('orders', 'order_product.order_id', '=', 'orders.id')
      ->where('orders.deliveryDate', $date)
      ->orderBy('order_product.quantity', $order)
      ->get(['products.id', 'products.name', 'order_product.quantity']);
  }

  public static function getInventaryAfterSales($date_sales, $date_revision) {
    return Product::leftJoin('order_product', 'products.id', '=', 'order_product.product_id')
      ->leftJoin('orders', 'order_product.order_id', '=', 'orders.id')
      ->leftJoin('inventory', 'inventory.product_id', '=', 'products.id')
      ->where([
        ['orders.deliveryDate', '=', $date_sales->default("2019-03-01")],
        ['inventory.availableDate', '=', $date_revision->default("2019-03-02")]
      ])
      ->selectRaw('products.id, products.name, (products_orders.quantity - inventory.quantity) as calculated_cuantity')
      ->get();

}

public static function getProductsAvailability($order_id, $operator) {
    return Product::leftJoin('order_product', 'products.id', '=', 'order_product.product_id')
      ->leftJoin('orders', 'order_product.order_id', '=', 'orders.id')
      ->leftJoin('inventory', 'inventory.product_id', '=', 'products.id')
      ->where([
        ['orders.id', '=', $order_id],
        ['order_product.quantity', $operator, 'inventory.quantity']
      ])
      ->get(['products.id', 'products.name', 'order_product.quantity as order_quantity', 'inventory.quantity as inventory_quantity']);
  }

}
