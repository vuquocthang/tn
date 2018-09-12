<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VipKeyword extends Model
{
    protected $table = 'vip_keyword';

    protected $fillable = [
        'user_id',
        'key',
        'value',
        'status',
        'type'
    ];
}
