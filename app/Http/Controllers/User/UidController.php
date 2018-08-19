<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Uid;
use App\Clon3;
use App\FriendRequest;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

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
			$uids = $uids->where('clone_id', $clone_id)
						->paginate(20);
		}
		
        return view('user.uid.index', [
            'uids' => $uids,
			'clones' => $clones,
			'clone_id' => $clone_id
        ]);
    }
	
	public function sent(Request $request){
		$user = Auth::user();
		
		$clones = $user->clones()->get();

		//$clones = Clon3::where('user_id', $userId)
					//->get();	
		
		//$cloneId = $request->query('clone_id');
		
		//$uids = FriendRequest::where('clone_id', $cloneId)->paginate(20);
		
		//if( $cloneId == 'all' || empty($cloneId) ){
			//$uids = FriendRequest::where('user_id', $userId)->paginate(20);
		//}
		
		$cloneId = $request->query('clone_id');
		
		$uids = $user->friendRequests()->paginate(20);
		
		if($cloneId != 'all' && !empty($cloneId) ){
			$uids = Clon3::find($cloneId)->friendRequests()->paginate(20);	
		}
		
        return view('user.uid.sent', [
            'uids' => $uids,
			'clones' => $clones,
			'cloneId' => $cloneId
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
					return redirect()->route('uid.index');
				}
			}
		}catch (\Exception $e){
			Log::error($e);
			return redirect()->route('uid.index');
		}

        return redirect()->route('uid.index');
    }
	
	public function delete($clone_id){
		if($clone_id == "all"){
			Uid::query()->delete();
			return redirect()->back();
		}
<<<<<<< HEAD

=======
		
>>>>>>> 9f268fb21d7f1ad57e9455498f7b5c5edf23d577
		$clone = Clon3::find($clone_id);
		
		$clone->uids2()->delete();
		
		return redirect()->back();
	}
}
