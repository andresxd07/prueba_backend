<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Product as ProductResource;

class Order extends JsonResource {

  public function toArray($request) {
    return [
      'id' => $this->id,
      'priority' => $this->priority,
      'address' => $this->address,
      'nameClient' => $this->personName,
      'deliveryDate' => $this->deliveryDate,
      'products' => ProductResource::collection($this->products)
    ];
  }
}
