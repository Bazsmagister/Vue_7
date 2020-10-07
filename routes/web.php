<?php

use App\Substance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Resources\Substance as SubstanceResource;
use App\Http\Resources\SubstanceCollection as SubstanceCollectionResource;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view(
        'welcome',
        [
                'title' => "An even cooler way to do the title"
            ]
    );
});

Route::get('/page', function () {
    return view(
        'page',
        [
                'title' => "Page 2 - A little about the Author",
                'author' => json_encode([
                        "name" => "Fisayo Afolayan",
                        "role" => "Software Enginner",
                        "code" => "Always keeping it clean"
                ])
            ]
    );
});

//moved to routes/api but it also work here, but without api in front of the url.
//Route::apiResource('substances', 'SubstanceController');

// Route::get('/substances', function () {
//     return SubstanceResource::collection(Substance::all());
// });

Route::get('/substances/2', function () {
    return new SubstanceResource(Substance::find(2));
});

Route::get('/substanceswithotherdatas', function () {
    return new SubstanceCollectionResource(Substance::paginate(3));
});




Route::get('/{any}', function () {
    return view('vueapp');
})->where('any', '.*');
