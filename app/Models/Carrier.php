<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Carrier extends Model {

    protected $table = 'carriers';

  public function orders() {
    return $this->belongsToMany('App\Order', 'carriers_orders');
  }

}
