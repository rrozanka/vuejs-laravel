<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', 'IndexController@getIndex');

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => 'api'], function() {
    Route::resource('messages', 'Api\MessagesController', ['only' => ['index', 'store']]);
});