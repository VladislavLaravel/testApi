<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Http\Controllers\BookController;

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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('registration', 'AuthController@registration');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    
});


Route::group(['middleware' => 'auth'], function(){

	Route::resource('/books', 'BookController')->only([
    	'show', 'store', 'update', 'destroy'
	]);
	
});

Route::get('/books', 'BookController@index')->name('index');

Route::get('authors/index', 'AuthorController@index')->name('index');
Route::get('authors/{author}/show', 'AuthorController@show')->name('show');
