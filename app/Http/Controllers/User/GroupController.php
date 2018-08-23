<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clon3;
use App\Proxy;
use App\Post;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Group;

class GroupController extends Controller
{
    public function index()
    {
		$groups = Group::paginate(20);
		
        return view('user.group.index', [
            'groups' => $groups
        ]);
    }

    public function addForm(){
        return view('user.group.add');
    }
	
	public function add(Request $req){
		Group::create([
			'user_id' => $req->user()->id,
			'uid' => $req->uid
		]);
		
		return redirect()->route('group.index');
	}

    
}
