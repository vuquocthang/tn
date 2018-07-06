<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clon3 extends Model
{
    //
    protected $table = 'clone';

    protected $fillable = [
        'uid',
        'user_id',
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
}
