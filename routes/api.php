<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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


//list the article
Route::get('/articles', 'ArticleController@index');

//show
Route::get('article/{id}','ArticleController@show');

//store
Route::post('article','ArticleController@store');

//edit
Route::put('article','ArticleController@store');

//delete
Route::delete('article/{id}','ArticleController@destroy');