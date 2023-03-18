<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model {

    protected $table = 'providers';

  public function products() {
    return $this->belongsToMany('App\Models\Product', 'providers_products');
  }

}
