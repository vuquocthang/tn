<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\Helpers\UploadHandler;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Clon3;

class PostController extends Controller
{
    //index	
	public function index(){
		$userId = Auth::id();
		
		$posts = Post::where('user_id', $userId)
			->paginate(20);
		
		return view('user.post.index', [
			'posts' => $posts
		]);
	}
	
	//add
	public function addForm(){
		$userId = Auth::id();
		
		$clones = Clon3::where('user_id', $userId)->get();
		
		return view('user.post.add', [
			'clones' => $clones
		]);
	}
	
	public function add(Request $request){
		$userId = Auth::id();
		
		$input = $request->all();
		
		$input['user_id'] = $userId;
		
		$post = Post::create($input);
		
		DB::table('post_file')
			->where('post_id', null)
			->update([
				'post_id' => $post->id
			]);
		
		return redirect()->route('post.index');
	}
	
	
	public function delete($id){
		$userId = Auth::id();
		
		$post = Post::where('user_id', $userId)
			->where('id', $id)
			->first();
			
		$post->files()->delete();
		$post->schedules()->delete();
		
		$post->delete();
		
		return redirect()->back();
	}
	
	//upload file
	public function upload(Request $request){
		//error_reporting(E_ALL | E_STRICT);

		//$upload_handler = new UploadHandler();
		$path = Storage::putFile('post', $request->file('file'));
		
		//return Response::json('success', 200);
		
		//Log::error('Path: ' . $path);
		
		$fn = basename($path);
		
		DB::table('post_file')->insert([
			'filename' => $fn		
		]);
	}
	
}
