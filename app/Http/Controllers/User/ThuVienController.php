<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostCat;
use App\PostCatSchedule;
use App\PostFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ThuVienController extends Controller
{
	
	//private $user;
	
	public function __construct(){
		//parent::__construct();
		
		//$this->user = Auth::user();
		
		//var_dump( $this->user );
	}
	
    //chuyen-muc
	public function chuyenMuc(){
		//$this->user = Auth::user();
		
		//var_dump( $this->user );
		
		return view('user.thu-vien.chuyen-muc');
	}
	
	//them-chuyen-muc
	public function themChuyenMuc(Request $request){
		$user = Auth::user();
		
		$user->createPostCat($request->all());
		
		return redirect()->route('thu-vien.chuyen-muc');
	}
	
	//sua-chuyen-muc/{id}
	public function suaChuyenMuc(Request $request, $id){
		try{
			$user = Auth::user();
		
			$user->updatePostCat($request->all(), $id);
		}catch(\Exception $e){
			
		}
		
		return redirect()->route('thu-vien.chuyen-muc');
	}
	
	//xoa-chuyen-muc/{id}
	public function xoaChuyenMuc($id){
		try{
			$user = Auth::user();
		
			$user->deletePostCat($id);
		}catch(\Exception $e){
			
		}
		
		return redirect()->back();
	}
	
	//danh-sach
	public function danhSach(){
		return view('user.thu-vien.danh-sach');
	}
	
	//tao-bai-viet
	public function taoBaiViet(Request $request){
		try{
			$user = Auth::user();
		
			$post = $user->createPost($request->all());
			
			//update filename
			PostFile::where('post_id', null)->update([
				'post_id' => $post->id
			]);
		}catch(\Exception $e){
			
		}
		
		return redirect()->route('thu-vien.danh-sach');
	}
	
	//upload-anh-bai-viet
	public function uploadAnhBaiViet(Request $request){
		$path = Storage::putFile('post', $request->file('file'));
		
		$fn = basename($path);
		
		if( isset($request->post_id) ){
			$postFile = PostFile::create([
				'filename' => $fn,
				'post_id' => $request->post_id
			]);
		}else{
			$postFile = PostFile::create([
				'filename' => $fn
			]);
		}
		
		return $postFile;
	}
	
	
	
	//xoa-anh-bai-viet
	public function xoaAnhBaiViet(Request $request){
		try{
			PostFile::where('filename', $request->filename)->delete();
		}catch(\Exception $e){
			
		}
	}
	
	//sua-bai-viet/{id}
	public function suaBaiViet($id, Request $request){
		try{
			$user = Auth::user();
		
			$post = $user->posts()->find($id)->update($request->all());
			
			
		}catch(\Exception $e){
			
		}
		
		return redirect()->back();
	}
	
	//xoa-bai-viet/{id}
	public function xoaBaiViet($id){
		try{
			$user = Auth::user();
		
			$user->deletePost($id);
		}catch(\Exception $e){
			
		}
		
		return redirect()->back();
	}
	
	//tao-lich-dang
	public function taoLichDang(Request $request){
		try{
			$user = Auth::user();
		
			$user->createPostCatSchedule($request->all());
		}catch(\Exception $e){
			echo $e;
		}
		
		return redirect()->route('thu-vien.lich-dang');
	}
	
	//lich-dang
	public function lichDang(Request $request){
		return view('user.thu-vien.lich-dang');
	}
	
	//sua-lich-dang
	public function suaLichDang($id,Request $request){
		$postCatSchedule = PostCatSchedule::find($id);
		
		//dd($postCatSchedule);
		
		$postCatSchedule->update($request->all());
		return redirect()->back();
	}
	
	//xoa-lich-dang
	public function xoaLichDang($id){
		try{
			$user = Auth::user();
		
			$user->deletePostCatSchedule($id);
		}catch(\Exception $e){
			echo $e;
		}
		
		return redirect()->back();
	}
}

