<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
	protected $table='post';
	
	protected $fillable = [
		'user_id',
		'time',
		'text',
		'status'
	];
	
	protected $attributes = [
		'files',
		'clone'
	];
	
	
	public function files(){
		return $this->hasMany('App\PostFile');
	}
}
