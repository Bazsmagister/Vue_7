<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('substances', 'SubstanceController');
//or
//Route::apiResource('substances', 'SubstanceResourceController');

// Route::apiResource('substances', 'SubstanceController')->except('update', 'delete', 'store');


// Route::group(['middleware' => 'auth:api'], function () {
//     Route::get('substances', 'SubstanceController@index');
//     Route::get('substances/{substance}', 'SubstanceController@show');
//     Route::post('substances', 'SubstanceController@store');
//     Route::put('substances/{substance}', 'SubstanceController@update');
//     Route::delete('substances/{substance}', 'SubstanceController@delete');
// });
