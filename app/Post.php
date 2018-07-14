<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
	protected $table='post';
	
	protected $fillable = [
		'user_id',
		'clone_id',
		'time',
		'text',
		'status'
	];
	
	public function files(){
		return $this->hasMany('App\PostFile');
	}
	
	public function clon3(){
		return $this->belongsTo('App\Clon3', 'clone_id');
	}
	
	public function schedules(){
		return $this->hasMany('App\PostSchedule');
	}
	
	public function readyPost(){
		if( empty($this->schedules()->get()) ){
			return true;
		}
		
		if( !$this->schedules()->orderBy('posted_at', 'DESC')->whereRaw('Date(posted_at) >= CURDATE()')->first() ){
			return true;
		}
		
		return false;
	}
	
	public function status(){
		return $this->readyPost() ? '<span style="color:green">Chưa Đăng</span>' :  '<span style="color:red">Đã Đăng</span>';
	}
	
	public function myDelete(){
		//delete files
		$this->files()->delete();

		//delete schedules
		$this->schedules()->delete();
		
		//delete post
		Post::destroy($this->id);
	}
}
