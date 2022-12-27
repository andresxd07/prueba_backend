<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Order as OrderResource;

class Carrier extends JsonResource {

  public function toArray($request) {
    return [
      'id' => $this->id,
      'names' => $this->names,
      'orders' => OrderResource::collection($this->orders),
      'updated_at' => $this->updated_at,
      'created_at' => $this->created_at,
    ];
  }
}
