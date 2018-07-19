<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCatSchedulePost extends Model
{
    //
	protected $table = 'post_cat_schedule_post';
	
	protected $fillable = [
		'post_cat_schedule_id',
		'post_id'
	];
}
