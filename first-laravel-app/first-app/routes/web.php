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

Route::get('/', [
    'uses' => 'SubscribeController@getItems',
    'as' => 'user.index'
]);

Route::get('about', function () {
    return view('user.about');
})->name('user.about');

Route::get('/contact', function () {
    return view('user.contact');
})->name('user.contact');
