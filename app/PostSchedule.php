<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostSchedule extends Model
{
    //
	protected $table='post_schedule';
	
	protected $fillable = [
		'post_id',
		'posted_at'
	];
}
