<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VipKeyword;
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

        VipKeyword::create( $input );

        return redirect()->route('keyword.index');
    }

    public function index(Request $req){
        $keywords = VipKeyword::orderBy('type')
            ->where('user_id', $req->user()->id )
            ->get();

        return view('user.keyword.index', [
            'keywords' => $keywords
        ]);
    }

    public function editForm($id){

        $keyword = VipKeyword::find($id);

        return view('user.keyword.edit', [
            'keyword' => $keyword
        ]);
    }

    public function edit(Request $request, $id){
        $keyword = VipKeyword::find($id);

        $input = $request->all();

        if($request->type == 'birthday' || $request->type == 'schedule_message'){
            $input['key'] = '';
        }

        $keyword->fill($input);
        $keyword->save();

        return redirect()->back()->with('message', 'Sửa keyword thành công !');
    }

    public function delete($id){
        VipKeyword::destroy($id);

        return redirect()->back()->with('message', 'Xóa keyword thành công !');
    }
}
