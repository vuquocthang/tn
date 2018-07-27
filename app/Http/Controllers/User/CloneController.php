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

class CloneController extends Controller
{
    public function index()
    {
		$userId = Auth::id();
		
        $clones = Clon3::
			where('user_id', $userId)
			->paginate(20);

        return view('user.clone.index', [
            'clones' => $clones
        ]);
    }

    public function uploadForm(){
        return view('user.clone.upload');
    }

    public function upload(Request $request){
        try{
            $path = Storage::putFile('clones', $request->file('file'));

            $contents = Storage::get($path);

            $lines = explode("\n", $contents);

            $userId = Auth::id();

            foreach ($lines as $line){
                try{
                    $line = explode('|', $line);

                    $c_user = explode(';', $line[3])[0] ;
                    $c_user = str_replace('c_user=', '', $c_user);

                    $xs = explode(';', $line[3])[1] ;
                    $xs = str_replace('xs=', '', $xs);

                    $uid = $line[0];

                    $check = Clon3::where('id', $uid)->first();

                    if (!$check){
                        Clon3::create([
                            'uid' => $uid,
                            'user_id' => $userId,
                            'c_user' => $c_user,
                            'xs' => $xs,
                            'token' => $line[4]
                        ]);
                    }

                }catch (Exception $e){
                    Log::error('Save clone ex: '.$e);
                }
            }

        }catch (Exception $e){
            Log::error('Upload clone ex: '.$e);
        }

        return redirect()->route('clone');
    }

    //add
    public function addForm(){
        return view('user.clone.add');
    }

    public function add(Request $request){
        $input = $request->all();

        $input['user_id'] = Auth::id();
		
		$cookieObj = json_decode($request->cookie);
		
		foreach( $cookieObj as $cookie ){
			if( $cookie->name == 'c_user' || $cookie->name == 'xs'){
				$input[$cookie->name] = $cookie->value;
			}
		}
		
		$input['uid'] = $input['c_user'];

        $clone = Clon3::create($input);
		
		$proxy = Proxy::orderBy('updated_at', 'ASC')->first();
        $proxy->touch();

		$clone->fill([
			'ip' => $proxy->ip,
			'port' => $proxy->port
		]);
		
		$clone->update();

        return redirect()->route('clone.index')->with('message', 'Thêm clone thành công !');
    }

    //edit
    public function editForm($id){
        try{
			$user = Auth::user();
		
			$clone = $user->clones()->where('id', $id)->first();
			
			return view('user.clone.edit', [
				'clone' => $clone
			]);
		}catch(\Exception $e){
			return redirect()->route('clone.index');
		}
    }

    public function edit(Request $request, $id){
		$user = Auth::user();
		
		$clone = $user->clones()->where('id', $id)->first();
		
		$cookieObj = json_decode($request->cookie);
		
		foreach( $cookieObj as $cookie ){
			if( $cookie->name == 'c_user' || $cookie->name == 'xs'){
				$input[$cookie->name] = $cookie->value;
			}
		}
		
		$input['uid'] = $input['c_user'];
		$input['cookie'] = $request->cookie;

        $clone->update($input);
        return redirect()->route('clone.index')->with('message', 'Sửa clone thành công !');
    }



    //delete
    public function delete($id){
			
        $clone = Clon3::where('user_id', Auth::id())
            ->where('id', $id)
            ->first();

		//delete post_cat_schedule_clone
		$clone->postCatScheduleClones()->delete();
		$clone->delete();

        return redirect()->route('clone.index')->with('message', 'Xóa clone thành công !');
    }
}
