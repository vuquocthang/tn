<?php

Route::prefix('admin')->namespace('Admin')->middleware('admin')->name('admin.')->group(function (){

    //keyword
    Route::prefix('keyword')->name('keyword.')->group(function (){
        Route::get('/', 'KeywordController@index')->name('index');

        //add
        Route::post('/add', 'KeywordController@add')->name('add');

        Route::get('/add', 'KeywordController@addForm')->name('add');

        //edit
        Route::get('/edit/{id}', 'KeywordController@editForm')->name('edit');

        Route::post('/edit/{id}', 'KeywordController@edit')->name('edit');

        //delete
        Route::get('/delete/{id}', 'KeywordController@delete')->name('delete');
    });
	
	//user
    Route::prefix('user')->name('user.')->group(function (){
        Route::get('/', 'UserController@index')->name('index');

        //add
        Route::post('/add', 'UserController@add')->name('add');

        Route::get('/add', 'UserController@addForm')->name('add');

        //edit
        Route::get('/edit/{id}', 'UserController@editForm')->name('edit');

        Route::post('/edit/{id}', 'UserController@edit')->name('edit');

        //delete
        Route::get('/delete/{id}', 'UserController@delete')->name('delete');
		
		//active
		Route::post('/active', 'UserController@active')->name('active');
    });

    //config
    Route::prefix('config')->name('config.')->group(function(){
        Route::get('/', 'ConfigController@index')->name('index');

        Route::post('/', 'ConfigController@edit')->name('index');
    });
});