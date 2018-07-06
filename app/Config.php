<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    //
    protected $table = 'configs';

    protected $fillable = [
        'lable',
        'name',
        'value'
    ];
}
