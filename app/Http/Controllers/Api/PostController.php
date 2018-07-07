<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    //
	public function index(){
		
		$post = Post::orderBy('updated_at', 'ASC')->first();
		
		$post->touch();
		
		return $post;
		
	}
}
