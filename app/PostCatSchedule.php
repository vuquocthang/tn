<?php

namespace App;

use App\Post;
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
		return PostCatSchedule::select('clone.*')
			->where('post_cat_schedule.id', $this->id)
			->join('post_cat_schedule_clone', 'post_cat_schedule.id', 'post_cat_schedule_clone.post_cat_schedule_id')
			->join('clone', 'post_cat_schedule_clone.clone_id', 'clone.id');
	}
	
	public function posts(){
		/*return PostCatSchedule::select('post.*')
			->where('post_cat_schedule.id', $this->id)
			->join('post_cat', 'post_cat_schedule.post_cat_id', 'post_cat.id')
			->join('post', 'post_cat.id', 'post.post_cat_id');*/
			
		return Post::select('post.*')
			->join('post_cat', 'post.post_cat_id', 'post_cat.id')
			->join('post_cat_schedule', 'post_cat.id', 'post_cat_schedule.post_cat_id')
			->where('post_cat_schedule.id', $this->id);
	}
}
