<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScanUIDController extends Controller
{
    //
	public function index(){
		return view('user.scan-uid.index');
	}
	
	public function saveToken(Request $req){
		\App\Token::create([
			'value' => $req->value,
			'user_id' => $req->user_id
		]);
	}
}
