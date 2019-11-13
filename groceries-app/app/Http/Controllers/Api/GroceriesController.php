<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Groceries;
use App\Http\Resources\Grocery as GroceryResource;
use App\Http\Resources\GroceryCollection;

class GroceriesController extends Controller
{
    public function groceries()
    {
    	//return GroceryResource::collection(Groceries::all());
    	return new GroceryCollection(Groceries::all());
    }

    public function delete(Groceries $groceries) {
    	$groceries->delete();

    	return response()->json(null, 200);
    }
}
