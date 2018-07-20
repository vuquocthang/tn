<?php

namespace App\Http\Controllers\Api;

use App\Clon3;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FriendRequest;

class AddFriendController extends Controller
{
    //
	
	public function addFriend(Request $request){
		$addFriend = FriendRequest::create($request->all());
		return $addFriend;
	}
	
}
