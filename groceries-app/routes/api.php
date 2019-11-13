<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/groceries', 'Api\GroceriesController@groceries');
Route::get('/grocery/delete/{groceries}', 'Api\GroceriesController@delete');
// /grocery/edit/1 => edit post => /grocery/edit/1 => update
// post /create/grocery create
