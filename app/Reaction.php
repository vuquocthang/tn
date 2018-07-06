<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    //
    protected $table = 'reaction';

    protected $fillable = [
        'user_id',
        'clone_id',
        'post_id',
        'type',
        'status',
    ];
}
