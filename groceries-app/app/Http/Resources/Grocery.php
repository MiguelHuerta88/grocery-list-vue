<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Grocery Resource. This can be used for sigle record or with collections by
 * using Grocery::collection(User::all()). Note however that this will not be able to include additional
 * data that you might want. Read: https://laravel.com/docs/5.8/eloquent-resources
 */
class Grocery extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'quantity' => $this->quantity,
            'notes' => $this->notes
        ];
    }
}
