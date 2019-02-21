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

Route::get('/organization', function () {
    return view('org');
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/organization', 'HomeController@org')->name('org');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('{slug}', 'PagesController@show');
