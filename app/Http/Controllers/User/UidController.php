<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Uid;
use App\Clon3;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UidController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::id();

        

		$clones = Clon3::where('user_id', $userId)
					->get();	
		
		$clone_id = $request->query('clone_id');
		
		$uids = Uid::where('user_id', $userId);
		
		if( $clone_id == 'all' || empty($clone_id) ){
			$uids = $uids->paginate(20);
		}else{
			$uids = $uids->
				where('clone_id', $clone_id)->
				paginate(20);
		}
		
            
			
        return view('user.uid.index', [
            'uids' => $uids,
			'clones' => $clones,
			'clone_id' => $clone_id
        ]);
    }

    public function uploadForm(){
		
		$userId = Auth::id();
		
		$clones = Clon3::where('user_id', $userId)
					->get();
		
        return view('user.uid.upload', [
			'clones' => $clones
		]);
    }

    public function upload(Request $request){
		try{
			$path = Storage::putFile('uids', $request->file('file'));

			$contents = Storage::get($path);

			$lines = explode("\n", $contents);

			$userId = Auth::id();

			foreach ($lines as $line){

				try{

					if (!empty($line) && !ctype_space($line)){
						Uid::create([
							'uid' => $line,
							'clone_id' => $request->clone_id,
							'user_id' => $userId
						]);
					}
				}catch (\Exception $e){
					//return redirect()->route('uid.index');
				}
			}
		}catch (\Exception $e){
			return redirect()->route('uid.index');
		}

        return redirect()->route('uid.index');
    }
}