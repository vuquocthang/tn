<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //
	protected $table = 'coupon';
	
	protected $fillable = [
		'code',
		'price_1m',
		'price_3m'
	];
}
