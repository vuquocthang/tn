<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uid extends Model
{
    //

    protected $table = 'uid';

    protected $fillable = [
        'uid',
        'user_id',
        'status'
    ];
}
