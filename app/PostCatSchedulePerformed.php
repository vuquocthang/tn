<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCatSchedulePerformed extends Model
{
    //
	protected $table = 'post_cat_schedule_performed';
	
	protected $fillable = [
		'post_cat_schedule_id'
	];
}
