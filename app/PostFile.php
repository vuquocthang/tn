<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostFile extends Model
{
    //
	protected $table='post_file';
	
	protected $fillable = [
		'post_id',
		'filename'
	];
}
