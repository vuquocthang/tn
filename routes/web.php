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

Auth::routes();

Route::middleware('auth')->namespace('User')->group(function (){
    Route::get('/', 'HomeController@index')->name('home');

    //clone
    Route::prefix('clone')->name('clone.')->middleware('user')->group(function(){
        //upload
        Route::get('/upload', 'CloneController@uploadForm')->name('upload');

        Route::post('/upload', 'CloneController@upload')->name('upload');

        //add
        Route::get('/add', 'CloneController@addForm')->name('add');

        Route::post('/add', 'CloneController@add')->name('add');

        //edit
        Route::get('/edit/{id}', 'CloneController@editForm')->name('edit');

        Route::post('/edit/{id}', 'CloneController@edit')->name('edit');

        //delete
        Route::get('/delete/{id}', 'CloneController@delete')->name('delete');

        //index
        Route::get('/', 'CloneController@index')->name('index');
    });

    //uid
    Route::prefix('uid')->name('uid.')->middleware('user')->group(function(){
        //upload
        Route::get('/upload', 'UidController@uploadForm')->name('upload');

        Route::post('/upload', 'UidController@upload')->name('upload');

        //add
        Route::get('/add', 'UidController@addForm')->name('add');

        Route::post('/add', 'UidController@add')->name('add');

        //index
        Route::get('/', 'UidController@index')->name('index');
		
		//sent
        Route::get('/sent', 'UidController@sent')->name('sent');
    });
	
	//post
	Route::prefix('post')->name('post.')->middleware('user')->group(function(){
		//index
		Route::get('/index', 'PostController@index')->name('index');
		
		//add
		Route::get('/add', 'PostController@addForm')->name('add');	
		
		Route::post('/add', 'PostController@add')->name('add');
		
		//upload
		Route::any('/upload', 'PostController@upload')->name('upload');
		
		//delete
		Route::name('del')->get('/delete/{id}', 'PostController@delete');
		
	});
	

});

require_once "test.php";
require_once "crawl.php";
require_once "admin.php";
