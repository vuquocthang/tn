<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Keyword;
use Illuminate\Support\Facades\Auth;

class KeywordController extends Controller
{
    //
    public function addForm(){
        return view('admin.keyword.add');
    }

    public function add(Request $request){

        $input = $request->all();

        $userId = Auth::id();

        $input['user_id'] = $userId;

        Keyword::create( $input );

        return redirect()->route('admin.keyword.index');
    }

    public function index(){
        //$userId = Auth::id();

        $keywords = Keyword::orderBy('type')
            //->where('user_id', $userId)
            ->get();

        return view('admin.keyword.index', [
            'keywords' => $keywords
        ]);
    }

    public function editForm($id){

        $keyword = Keyword::find($id);

        return view('admin.keyword.edit', [
            'keyword' => $keyword
        ]);
    }

    public function edit(Request $request, $id){
        $keyword = Keyword::find($id);

        $input = $request->all();

        if($request->type == 'birthday' || $request->type == 'schedule_message'){
            $input['key'] = '';
        }

        $keyword->fill($input);
        $keyword->save();

        return redirect()->back()->with('message', 'Sửa keyword thành công !');
    }

    public function delete($id){
        Keyword::destroy($id);

        return redirect()->back()->with('message', 'Xóa keyword thành công !');
    }
}
