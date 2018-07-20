<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    //
    protected $table = 'send_friend_request';

    protected $fillable = [
        'clone_id',
        'uid',
        'status',
    ];
}
