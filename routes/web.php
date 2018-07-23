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
	
	//thu-vien
	Route::prefix('thu-vien')->name('thu-vien.')->middleware('user')->group(function(){
		//danh-sach
		Route::get('/danh-sach', 'ThuVienController@danhSach')->name('danh-sach');
		
		//bai-viet/tao
		Route::post('/bai-viet/tao', 'ThuVienController@taoBaiViet')->name('tao-bai-viet');
		
		//bai-viet/xoa/{id}
		Route::get('/bai-viet/xoa/{id}', 'ThuVienController@xoaBaiViet')->name('xoa-bai-viet');
		
		//chuyen-muc
		Route::get('/chuyen-muc', 'ThuVienController@chuyenMuc')->name('chuyen-muc');
		
		//chuyen-muc
		Route::post('/chuyen-muc/them', 'ThuVienController@themChuyenMuc')->name('them-chuyen-muc');
		
		//chuyen-muc/sua/{id}
		Route::post('/chuyen-muc/sua/{id}', 'ThuVienController@suaChuyenMuc')->name('sua-chuyen-muc');
		
		//chuyen-muc/xoa/{id}
		Route::get('/chuyen-muc/xoa/{id}', 'ThuVienController@xoaChuyenMuc')->name('xoa-chuyen-muc');
		
		//lich-dang/tao
		Route::post('/lich-dang/tao', 'ThuVienController@taoLichDang')->name('tao-lich-dang');
		
		//lich-dang
		Route::get('/lich-dang', 'ThuVienController@lichDang')->name('lich-dang');
		
		//xoa-lich-dang/{id}
		Route::get('/xoa-lich-dang/{id}', 'ThuVienController@xoaLichDang')->name('xoa-lich-dang');
	});
	
	Route::prefix('lich-dang-bai')->name('lich-dang-bai.')->middleware('user')->group(function(){
		
		Route::get('danh-sach', 'LichDangBaiController@danhSach')->name('danh-sach');
		
	});	
	
	//scan uid
	Route::prefix('scan-uid')->name('scan-uid.')->middleware('user')->group(function(){
		
		Route::get('', 'ScanUIDController@index')->name('index');
		
	});	

});

require_once "test.php";
require_once "crawl.php";
require_once "admin.php";
