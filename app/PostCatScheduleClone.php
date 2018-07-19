<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCatScheduleClone extends Model
{
    //
	protected $table = 'post_cat_schedule_clone';
	
	protected $fillable = [
		'post_cat_schedule_id',
		'clone_id'
	];
}
