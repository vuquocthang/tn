<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    //

    protected $table = 'keyword';

    protected $fillable = [
        'user_id',
        'key',
        'value',
        'status',
        'type'
    ];
}
