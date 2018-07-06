<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    //
    protected $table = 'send_friend_request';

    protected $fillable = [
        'user_id',
        'clone_id',
        'uid',
        'status',
    ];
}
