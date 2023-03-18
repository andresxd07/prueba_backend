<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 *     @property int $id
 *   * @property string $name
 */
class Carrier extends Model {

    protected $fillable = [
        'id',
        'quanitity',
        'available_date',
        'product_id'
    ];

    protected $table = 'carrier_orders';

  public function orders() {
    return $this->belongsToMany('App\Models\Order');
  }

}
