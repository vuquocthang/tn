<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    //
	public function index(){
		
		$post = Post::orderBy('updated_at', 'ASC')
					->join('post_file', 'post.id', 'post_file.post_id')
					->join('users', 'post.user_id', 'users.id')
					->join('clone', 'users.id', 'clone.user_id')
					->first();
		
		$post->touch();
		
		return $post;
		
	}
}
