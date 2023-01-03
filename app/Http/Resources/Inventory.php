<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class Inventory extends JsonResource {

  public function toArray($request) {
    return [
      'id' => $this->id,
      'quantity' => $this->quantity,
      'available_date' => $this->available_date,
      'products' => $this->product != null ? [
        'id' => $this->product->id,
        'name' => $this->product->name,
      ] : null,
    ];
  }
}
