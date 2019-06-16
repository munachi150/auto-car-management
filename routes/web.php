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

Route::get('/', 'PageController@home'); 
Route::get('about_us','PageController@about_us');
Route::get('services','PageController@services');
Route::get('product_aside', 'PageController@product_aside');
Route::get('gallery', 'PageController@gallery');
Route::get('all_categories', 'PageController@all_categories');
Route::get('contact_us', 'PageController@contact_us');
Route::get('all_cars',"PageController@all_cars");
Route::get('add_car','PageController@add_car');
Route::get('prices','PageController@prices');
Route::get('cars/create','CarController@create');
Route::post('cars/create','CarController@store');
Route::get('cars/delete/{id}','CarController@delete');
Route::post('cars/delete/{id}','CarController@destroy');

//Category Route
Route::get('categories/create', 'CategoryController@create');
Route::post('categories/create', 'CategoryController@store');
Route::get('category/{url}', 'CategoryController@show');
Route::get('categories/edit/{id}', 'CategoryController@edit');
Route::post('categories/edit/{id}', 'CategoryController@update');
Route::get('categories/delete/{id}', 'CategoryController@delete');
Route::post('categories/delete/{id}', 'CategoryController@destroy');

Auth::routes();
Route::get('car/{url}', 'CarController@show');
Route::get('cars/edit/{id}', 'CarController@edit');
Route::post('cars/edit/{id}', 'CarController@update');

Route::get('/home', 'PageController@home')->name('home');
Route::get('logout', 'Auth\loginController@logout');
