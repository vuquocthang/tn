<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\FriendRequest;
use App\Uid;
use App\Post;
use App\PostSchedule;

class Clon3 extends Model
{
    //
    protected $table = 'clone';

    protected $fillable = [
        'uid',
        'user_id',
		'note',
        'c_user',
        'xs',
        'token',
        'status',
        'ip',
        'port'
    ];
	

    /**
     * @return mixed
     */
    public function friendRequests(){
        return $this->hasMany('App\FriendRequest');
    }

    /**
     * @return mixed
     */
    public function reactions()
    {
        return $this->hasMany('App\Reaction');
    }
	
	
	public function uids(){
		return $this
			->hasMany('App\Uid', 'clone_id', 'id')
			->get();
	}
	
	public function sentFriendRequestUids(){
		return $this
			->hasMany('App\FriendRequest', 'clone_id', 'id')
			->get();
	}
	
	public function unsentFriendRequestUids(){
		
		return $this
			->hasMany('App\Uid', 'clone_id', 'id')
			->whereNotIn('uid', FriendRequest::select('uid')->where('clone_id', $this->id)->get() )
			->get();
	}
	
	public function readyFriendRequestUids($uids, $quantity){
        shuffle($uids);
        return array_slice($uids, 0, $quantity);
    }
	
	public function myDelete(){
		//delete uids
		Uid::where('clone_id', $this->id)
			->delete();
		
		//delete sent requests
		FriendRequest::where('clone_id', $this->id)
			->delete();
		
		//delete posts
		foreach($this->posts() as $post){
			$post->myDelete();
		}
			
		//delete clone
		DB::table('clone')
			->where('id', $this->id)
			->delete();
	}
	
	//post
	public function posts(){
		return $this
			->hasMany('App\Post', 'clone_id', 'id')
			->get();
	}
}
