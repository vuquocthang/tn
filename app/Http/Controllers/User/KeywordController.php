<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Keyword;
use Illuminate\Support\Facades\Auth;

class KeywordController extends Controller
{
    //
    public function addForm(){
        return view('user.keyword.add');
    }

    public function add(Request $request){

        $input = $request->all();

        $userId = Auth::id();

        $input['user_id'] = $userId;

        Keyword::create( $input );

        return redirect()->route('keyword');
    }

    public function index(){
        $userId = Auth::id();

        $keywords = Keyword::orderBy('type')->where('user_id', $userId)->get();

        return view('user.keyword.index', [
            'keywords' => $keywords
        ]);
    }
}
