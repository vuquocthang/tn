<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clon3;
use App\Proxy;
use App\Post;
use App\Transaction;
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
		
		$tran = Transaction::where('user_id', $user->id)
					->where('type', $type)
					->where('status', 'waiting')
					->first();

		if($tran){
			$price = $tran->price;
			$txnId = $tran->txn_id;
			
		}else{
			$tran = Transaction::create([
				'user_id' => $user->id,
				'type' => $type
			]);
			
			$txnId = "TXN-" . $tran->id;
			$tran->txn_id = $txnId;
			
			
			switch($type) {
				case "Trial" : $price = 29000; break; 
				case "Beginner" : $price = 199000; break; 
				case "Starter" : $price = 537000; break; 
				case "Business" : $price = 894000; break; 
				default : $price = 29000; break; 
			}
			
			$tran->price = $price;
			$tran->save();
		}
		
        return view('user.buy.index', compact('price', 'txnId'));
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

    
}
