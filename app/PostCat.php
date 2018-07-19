<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCat extends Model
{
    //
	protected $table = 'post_cat';
	
	protected $fillable = [
		'user_id',
		'title'
	];
	
	public function posts(){
		return $this->hasMany('App\Post', 'post_cat_id');
	}
	
	public function postCatSchedules(){
		return $this->hasMany('App\PostCatSchedule');
	}
	
	public function postCatScheduleClones(){
		return $this->hasManyThrough(
			'App\PostCatScheduleClone', 
			'App\PostCatSchedule'
		);
	}
}
