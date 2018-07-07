<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;

class PostController extends Controller
{
    //
	public function index(){
		
		$post = Post::orderBy('post.updated_at', 'ASC')
					->first();
		
		
		$post->touch();
		
		
		$clones = User::select('clone.*')
			->where('users.id', $post->user_id)
			->join('clone', 'users.id', 'clone.user_id')
			->get();
		
		$post->files = $post->files()->get();
		
		$post->clones = $clones;
		
		return $post;
		
	}
}
