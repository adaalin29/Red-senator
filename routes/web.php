<?php

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

Route::middleware('page-cache')->get('/', 'IndexController@index');
Route::middleware('page-cache')->get('/news', 'NewsController@index');
Route::middleware('page-cache')->get('/contact','ContactController@index');
Route::middleware('page-cache')->get('/news/{link_news}', 'NewsController@detaliu_news');
Route::middleware('page-cache')->get('/dogs/{link_dogs}', 'DogsController@index');
Route::middleware('page-cache')->get('/puppies', 'DogsController@getPuppies');
Route::middleware('page-cache')->get('/for-sale','ForSaleController@index');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
