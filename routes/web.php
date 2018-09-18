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

Route::get('/', 'HomeController@index')->name('home');

Route::middleware('auth')->namespace('User')->group(function (){
    Route::get('/dashboard', function(){
		return view('user.base');
	});

    //clone
    Route::prefix('clone')->name('clone.')->middleware('user')->middleware('guard.active.service')->group(function(){
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
    Route::prefix('uid')->name('uid.')->middleware('user')->middleware('guard.active.service')->group(function(){
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
		
		//delete 
		Route::get('/delete/{clone_id}', 'UidController@delete')->name('delete');
    });
	
	//post
	Route::prefix('post')->name('post.')->middleware('user')->middleware('guard.active.service')->group(function(){
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
	Route::prefix('thu-vien')->name('thu-vien.')->middleware('user')->middleware('guard.active.service')->group(function(){
		//danh-sach
		Route::get('/danh-sach', 'ThuVienController@danhSach')->name('danh-sach');
		
		//bai-viet/tao
		Route::post('/bai-viet/tao', 'ThuVienController@taoBaiViet')->name('tao-bai-viet');
		
		//bai-viet/upload-anh
		Route::post('/bai-viet/upload-anh', 'ThuVienController@uploadAnhBaiViet')->name('upload-anh-bai-viet');
		
		//bai-viet/xoa-anh
		Route::post('/bai-viet/xoa-anh', 'ThuVienController@xoaAnhBaiViet')->name('xoa-anh-bai-viet');
		
		//bai-viet/sua/{id}
		Route::post('/bai-viet/sua/{id}', 'ThuVienController@suaBaiViet')->name('sua-bai-viet');
		
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
		
		//lich-dang/sua
		Route::post('/lich-dang/sua/{id}', 'ThuVienController@suaLichDang')->name('sua-lich-dang');
		
		//lich-dang
		Route::get('/lich-dang', 'ThuVienController@lichDang')->name('lich-dang');
		
		//xoa-lich-dang/{id}
		Route::get('/xoa-lich-dang/{id}', 'ThuVienController@xoaLichDang')->name('xoa-lich-dang');
	});
	
	//lich-dang-bai
	Route::prefix('lich-dang-bai')->name('lich-dang-bai.')->middleware('user')->group(function(){
		
		Route::get('danh-sach', 'LichDangBaiController@danhSach')->name('danh-sach');
		
		Route::get('xoa/{id}', 'LichDangBaiController@xoa')->name('xoa');
		
	});	
	
	//scan uid
	Route::prefix('scan-uid')->name('scan-uid.')->middleware('user')->middleware('guard.active.service')->group(function(){
		
		Route::get('', 'ScanUIDController@index')->name('index');
		
		Route::post('saveToken', 'ScanUIDController@saveToken')->name('save.token');
	});	
	
	//group
	Route::prefix('group')->name('group.')->middleware('user')->middleware('guard.active.service')->group(function(){
		
		Route::get('add', 'GroupController@addForm')->name('add');
		
		Route::post('add', 'GroupController@add')->name('add');
		
		Route::get('index', 'GroupController@index')->name('index');
	});	
	
	//mua tai khoan
	Route::prefix('buy')->name('buy.')->group(function(){
		Route::get('/', 'BuyController@index')->name('index');
		
		Route::post('/coupon', 'BuyController@coupon')->name('coupon');
	});
	
	//keyword (only vip user)
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
});

require_once "test.php";
require_once "crawl.php";
require_once "admin.php";
