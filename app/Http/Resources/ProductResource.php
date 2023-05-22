<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->whenNotNull($this->title),
            'maker' => $this->whenNotNull($this->maker),
            'price'=> $this->whenNotNull($this->price),
            'data_make'=>$this->whenNotNull($this->data_make),
            'maker_id'=> $this->maker_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
