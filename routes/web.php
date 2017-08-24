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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('user')->group(function(){
  Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');
  Route::get('/membership', 'UserController@membership')->name('membership');
  Route::get('/resume', 'UserController@resume')->name('resume');
  Route::get('/favorite-ads', 'UserController@favorite')->name('favorite-ads');
  Route::get('/settings', 'UserController@settings')->name('settings');
});

Route::prefix('admin')->group(function(){
  Route::resource('categories', 'CategoryController');
  Route::resource('sub-categories', 'SubCategoryController');
  Route::resource('divitions', 'DivitionController');
  Route::resource('places', 'PlaceController');
});

Route::resource('ads', 'AdsController');

Route::resource('post', 'PostController');

Route::get('/make-favorite/{id}', 'PostController@favorite')->name('favorite.check');
