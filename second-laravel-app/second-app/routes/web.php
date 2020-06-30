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
    return view('index');
})->name('user.index');

Route::get('/about', function () {
    return view('about');
})->name('user.aboutUs');

Route::group(['prefix' => 'admin'], function () {
    Route::get('', [
        'uses' => 'PostController@getItems',
        'as' => 'admin.index'
    ]);

    Route::get('/create', function () {
        return view('admin.create');
    })->name('admin.create');

    Route::post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::post('/edit', [
        'uses' => 'PostController@postEdit',
        'as' => 'admin.update'
    ]);

    Route::get('/edit/{id}', [
        'uses' => 'PostController@getEdit',
        'as' => 'admin.edit'
    ]);
});
