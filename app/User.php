<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Clon3;


class User extends Authenticatable
{
    use Notifiable;
	use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function clones(){
        return $this->hasMany('App\Clon3');
    }
	
	public function friendRequests(){
		return $this->hasManyThrough(
			'App\FriendRequest', 
			'App\Clon3',
			'user_id',
			'clone_id'
		);
	}

    public function uids(){
        return $this->hasMany('App\Uid')->get();
    }
	
	//post cat
	public function createPostCat($input){
		$input['user_id'] = $this->id;
		
		\App\PostCat::create($input);
	}
	
	public function updatePostCat($input, $id){
		$input['user_id'] = $this->id;
		
		$this->postCats()
			->where('id', $id)
			->first()
			->fill($input)
			->save();
	}

	public function postCats(){
		return $this->hasMany('App\PostCat');
	}
	
	public function deletePostCat($id){
		$this->postCats()->where('id', $id)->delete();
	}
	
	
	
	//bai-viet
	public function createPost($input){
		\App\Post::create($input);
	}
	
	public function deletePost($id){
		$this->posts()
			->where('post.id', $id)
			->delete();
	}
	
	public function posts(){
		return $this->hasManyThrough(
			'App\Post', 
			'App\PostCat'
		);
	}
	
	//post cat schedule
	public function postCatSchedulesByDateAndHour($date, $hour){
		return $this->hasManyThrough(
			'App\PostCatSchedule', 
			'App\PostCat'
		)->select('post_cat_schedule.*')
		->where('date', $date)
		->where('hour', $hour);
	}
	
	public function postCatSchedules(){
		return $this->hasManyThrough(
			'App\PostCatSchedule', 
			'App\PostCat'
		);
	}
	
	public function postCatScheduleClones(){
		return $this->hasManyDeep('App\PostCatScheduleClone', ['App\PostCat', 'App\PostCatSchedule']);	
	}
	
	public function createPostCatSchedule($input){
		$schedule = \App\PostCatSchedule::create($input);
		
		foreach($input['clone_id'] as $clone_id){
			\App\PostCatScheduleClone::create([
				'clone_id' => $clone_id,
				'post_cat_schedule_id' => $schedule->id
			]);
		}
	}
	
	public function deletePostCatSchedule($id){
		$this->postCatScheduleClones()
			->where('post_cat_schedule.id', $id)
			->delete();
		$this->postCatSchedules()
			->where('post_cat_schedule.id', $id)
			->delete();
	}

}
