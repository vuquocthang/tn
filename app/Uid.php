<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uid extends Model
{
    //

    protected $table = 'uid';

    protected $fillable = [
        'uid',
		'clone_id',
        'user_id',
        'status'
    ];
}
