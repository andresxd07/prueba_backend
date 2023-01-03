<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Inventory extends Model {

    protected $table = 'inventories';

  public function products() {
    return $this->belongsTo('App\Product');
  }
}
