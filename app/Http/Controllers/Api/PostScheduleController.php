<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostCatSchedule;

class PostScheduleController extends Controller
{
    //
	public function schedule(){
		$schedule = PostCatSchedule::orderBy('updated_at', 'ASC')->first();
		$schedule->touch();
		
		$schedule->clones = $schedule->clones()->get();
		
		return $schedule;
	}
}
