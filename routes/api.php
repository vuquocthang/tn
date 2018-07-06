<?php

use Illuminate\Http\Request;

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

Route::namespace('Api')->group(function (){
    Route::get('proxy', 'ProxyController@index');

    Route::get('clone', 'CloneController@index');

    /**
     * 
     */
    Route::post('message', 'HomeController@message');

    Route::post('happybirthday', 'HomeController@happyBirthday');

    Route::post('schedulemessage', 'HomeController@scheduleMessage');

    /*
     * keywords
     */
    Route::post('keywords', 'HomeController@keywords');
});