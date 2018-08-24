<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostCatSchedule;
use Illuminate\Support\Facades\DB;
use App\PostCatSchedulePerformed;

class PostScheduleController extends Controller
{
    //
	public function schedule(){
		$schedules = PostCatSchedule::select('post_cat_schedule.*')
			->whereRaw('date = DAYOFWEEK( NOW() )')
			->whereRaw('id NOT IN (SELECT post_cat_schedule_id FROM post_cat_schedule_performed WHERE DATE(post_cat_schedule_performed.created_at) = DATE(NOW()) )')
			->get();
			
		foreach($schedules as $index => $schedule){
			$schedule->clones = $schedule->clones()->where('status', 'Live')->get();
		
			$post = $schedule->posts()->orderBy('updated_at', 'ASC')->lockForUpdate()->first();
		
			if($post){
				$post->touch();	
				
				$post->files = $post->files()->get();
				
				$schedule->post = $post;
			}else{
				unset($schedules[$index]);
			}
		}	
		
		return $schedules;
		
		/*
		return $schedules;
		
		
		$schedule = PostCatSchedule::orderBy('updated_at', 'ASC')->first();
		$schedule->touch();
		
		$schedule->clones = $schedule->clones()->get();
		
		//$schedule->posts = $schedule->posts()->get();
		
		$post = $schedule->posts()->orderBy('updated_at', 'ASC')->first();
		
		if($post){
			$post->touch();	
			
			$post->files = $post->files()->get();
		}
		
		$schedule->post = $post;
		
		return $schedule;
		*/
	}
	
	//performed 
	public function performed(Request $request){
		return PostCatSchedulePerformed::create($request->all());
	}
}
