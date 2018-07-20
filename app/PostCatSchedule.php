<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCatSchedule extends Model
{
    //
	protected $table = 'post_cat_schedule';
	
	protected $fillable = [
		'post_cat_id',
		'date',
		'hour'
	];
	
	public function postCat(){
		return $this->belongsTo('App\PostCat');
	}
	
	public function clones(){
		return $this->hasManyThrough(
			'App\Clon3',
			'App\PostCatScheduleClone',
			'post_cat_schedule_id',
			'clone_id',
			'id',
			'id'
		);
	}
}
