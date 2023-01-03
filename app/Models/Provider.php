<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model {

    protected $table = 'providers';

  public function products() {
    return $this->belongsToMany('App\Product', 'providers_products');
  }

}
