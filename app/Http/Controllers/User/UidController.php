<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Uid;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UidController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $uids = Uid::where('user_id', $userId)
            ->paginate(20);

        return view('user.uid.index', [
            'uids' => $uids
        ]);
    }

    public function uploadForm(){
        return view('user.uid.upload');
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