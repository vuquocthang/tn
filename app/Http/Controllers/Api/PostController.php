<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\PostSchedule;
use App\User;

class PostController extends Controller
{
    //
	public function index(){
		
		$posts = Post::orderBy('post.updated_at', 'ASC')->get();
			
		foreach($posts as $post){
			if( $post->readyPost() ){
				$post->touch();
				
				$post->files = $post->files()->get();
				$post->clone = $post->clon3()->first();
				
				return $post;
			}
		}
	
		return [];
	}
	
	public function posted(Request $request){
		PostSchedule::create([
			'post_id' => $request->post_id,
			'posted_at' => date("Y-m-d")
		]);
	}
}
