<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', [
        'uses' => 'GamesController@index',
        'as' => 'game.index'
    ]);

    
    Route::get('create', [
        'uses' => 'GamesController@create',
        'as' => 'game.create'
    ]);

    Route::post('create', [
        'uses' => 'GamesController@store',
        'as' => 'game.store'
    ]);

    Route::get('/{id}/confirm', [
        'as'=>'game.confirm',
        'uses'=>'GamesController@destroyConfirm'
    ]);

    Route::delete('/{id}/delete', [
        'as'=>'game.delete',
        'uses'=>'GamesController@destroy'
    ]);

    Route::get('/{id}/edit', [
        'as'=>'game.edit',
        'uses'=>'GamesController@edit'
    ]);

    Route::put('/{id}/edit', [
        'as'=>'game.update',
        'uses'=>'GamesController@update'
    ]);

});