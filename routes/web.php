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

Route::domain('titan.pbbg.io')->group(function() {
    Route::get('/', 'TitanController@index');
});

Route::get('/titan', 'TitanController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/marketplace', 'MarketplaceController@search')->name('marketplace.search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{name}', 'ProfileController@index')
    ->name('profile');

Route::get('/account', 'AccountController@index')
    ->name('account');

Route::post('/account/changepassword', 'AccountController@changePassword')
    ->name('account.change_password');

Route::get('/marketplace/{extension}', 'MarketplaceController@show')
    ->name('marketplace.show');
