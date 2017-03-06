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


Route::get("/example/{foo}", function($foo) {
    return [ 'key' => $foo, 'items' => [1,2,3]];
});

Route::put("/example/controller/{foo}", 'ExampleApiController@handle');