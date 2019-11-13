<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Groceries;
use App\Http\Resources\Grocery as GroceryResource;
use App\Http\Resources\GroceryCollection;
use App\Http\Requests\CreateGroceryRequest;

class GroceriesController extends Controller
{
	/**
	 * Pull all Groceries
	 *
	 * @return Resource (GroceryCollection)
	 */
    public function groceries()
    {
    	//return GroceryResource::collection(Groceries::all());
    	return new GroceryCollection(Groceries::all());
    }

    /**
     * Delete Grocery Item
     *
     * @param Groceries $groceries
     * @return JSON Response
     */
    public function delete(Groceries $groceries) {
    	$groceries->delete();

    	return response()->json(null, 200);
    }

    /**
     * Create new grocery item
     *
     * @return Reseouce
     */
    public function create(CreateGroceryRequest $request)
    {
    	// insert
    	$attributes = $request->all();

    	//dd(Groceries::create($attributes));
    	return new GroceryResource(Groceries::create($attributes));
    }
}
