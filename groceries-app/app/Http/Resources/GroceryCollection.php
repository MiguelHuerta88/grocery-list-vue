<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Auth;

/**
 * A Collection Resource allows additional information and meta data to be passed if we need it 
 * https://laravel.com/docs/5.8/eloquent-resources
 */
class GroceryCollection extends ResourceCollection
{
    public $preserveKeys = true;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'isLoggedIn' => Auth::check()
        ];
    }
}
