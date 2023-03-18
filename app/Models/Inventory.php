<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Inventory extends Model {

    protected $fillable = [
        'id',
        'quanitity',
        'available_date',
        'product_id'
    ];

    protected $table = 'inventories';

  public function products() {
    return $this->belongsTo('App\Models\Product');
  }
}
