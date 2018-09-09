<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function addForm(){
        return view('admin.user.add');
    }

    public function add(Request $request){
		
		$request->validate([
			'name' => 'required',
			'email' => 'required|unique:users|max:255',
			'password' => 'required|min:6',
		], [
			'password.min' => "Mật khẩu phải từ 6 ký tự."
		]);

        $input = $request->all();

		$input['password'] = bcrypt( $request->password ); 
		
        $input['is_admin'] = 0;
		
		User::create($input);

        return redirect()->route('admin.user.index');
    }

    public function index(){
        $users = User::orderBy('created_at', 'DESC')
			->where('is_admin', 0)
			->where('email', '!=', 'ranchoi@page5s.com')
            ->get();

        return view('admin.user.index', [
            'users' => $users
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
        User::destroy($id);

        return redirect()->back()->with('message', 'Xóa user thành công !');
    }
	
	public function active(Request $req){
			
		$user = User::find($req->user_id);
		$user->service_type = $req->service_type;
		$user->save();
		
        return redirect()->back()->with('message', 'Active thành công !');
    }
}
