<?php

use Illuminate\Http\Request;
use App\Proxy;
use App\Clon3;

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

Route::namespace('Api')->middleware('guard.api')->group(function (){
    Route::get('proxy', 'ProxyController@index');
	
	Route::get('proxies', function(){
		return Proxy::all();
	});
	
	Route::put('proxy/{id}', function($id, Request $request){
		$proxy = Proxy::find($id);
		return $proxy->update($request->all());
	});

	Route::post('proxy', function(Request $request){
		$proxy = Proxy::where('ip', $request->ip)->first();
		
		if($proxy){
			return $proxy;
		}
		
		return Proxy::create($request->all());
	});	

	//clone apis
    Route::get('clone', 'CloneController@index');
	
	Route::get('clone/{status}', 'CloneController@status');
	
	Route::get('clones/{serviceType}/{keywordType}', 'CloneController@serviceType');
	
	Route::get('clones', function(){
		return Clon3::all();
	});
	
	Route::get('clones/{status}', 'CloneController@getAllCloneByStatus');
	
	Route::put('clone/{id}', function($id, Request $request){
		$clon3 = Clon3::find($id);
		return $clon3->update($request->all());
	});
	//end clone apis

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
	
	//post
	Route::get('post', 'PostController@index');
	
	//posted
	Route::any('posted', 'PostController@posted');
	
	//post cat schedule
	Route::get('schedule', 'PostScheduleController@schedule');
	
	//post cat schedule performed
	Route::post('schedule/performed', 'PostScheduleController@performed');
	
	//add friend
	Route::post('addfriend', 'AddFriendController@addFriend');
	
	/*log*/
	Route::post('log', 'LogController@index');
	
	//accept transaction
	Route::post('transaction/accept', function(Request $req){
		$waitingTrans = \App\Transaction::where('status', 'waiting')->get();
		
		$amount = $req->amount;
		$content = $req->content;
		
		foreach($waitingTrans as $tran){
			if (strpos($content, $tran->txn_id) !== false) {
				if($amount == $tran->price3m){
					\App\Transaction::find($tran->id)->update([
						'status' => 'complete'
					]);
					
					\App\User::find($tran->user_id)->update([
						'service_type' => $tran->type . "3m"
					]);
					
					return "Giao dịch ". $tran->txn_id . " thành công";
				}else if($amount == $tran->price){
					\App\Transaction::find($tran->id)->update([
						'status' => 'complete'
					]);
					
					\App\User::find($tran->user_id)->update([
						'service_type' => $tran->type
					]);
					
					return "Giao dịch ". $tran->txn_id . " thành công";
				}
			}
		}
		
		return "Không giao dịch nào thành công";
		
	});
	
});