<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clon3;
use App\Proxy;
use App\Post;
use App\Transaction;
use App\Coupon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BuyController extends Controller
{
    public function index(Request $request)
    {
		
		$user = $request->user();
		$type = $request->input('type');
		$price = 0;
		$price3m = 0;
		
		$tran = Transaction::where('user_id', $user->id)
					->where('type', $type)
					->where('status', 'waiting')
					->first();

		if($tran){
			$price = $tran->price;
			$price3m = $tran->price3m;
			$txnId = $tran->txn_id;
			
		}else{
			$tran = Transaction::create([
				'user_id' => $user->id,
				'type' => $type
			]);
			
			$txnId = "ONEBIT" . $tran->id;
			$tran->txn_id = $txnId;
			
			
			switch($type) {
				case "Trial" : $price = 29000; break; 
				case "Beginner" : $price = 199000; $price3m = 497000; break; 
				case "Starter" : $price = 537000; $price3m = 1197000; break; 
				case "Business" : $price = 894000; $price3m = 1697000; break; 
				default : $price = 29000; break; 
			}
			
			$tran->price = $price;
			$tran->price3m = $price3m;
			$tran->save();
		}
		
        return view('user.buy.index', compact('price', 'txnId', 'price3m'));
    }
	
	function goRandomString($length = 10) {
        $characters = 'abcdefghijklmnpqrstuvwxyz123456789';
        $string = '';
        $max = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, $max)];
        }
        return $string;
    }
	
	public function coupon(Request $req){
		$type = $req->input('type');
		
		if($type === "Beginner"){
			$check = Coupon::where('code', $req->code)->first();
		
			if($check){
				$tran = Transaction::where('txn_id', $req->txn_id)->first();
				
				if($tran){
					$tran->update([
						'price' => $check->price_1m,
						'price3m' => $check->price_3m
					]);
				}
			}
		}
		
		
		return redirect()->back();
	} 
}
