<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clon3;
use App\Proxy;

class CloneController extends Controller
{
    public function index()
    {
        $clone = Clon3::orderBy('updated_at', 'ASC')->first();
		
		if($clone){
			$clone->touch();
		}

        if( empty($clone->ip) && empty($clone->port) ){
            $proxy = Proxy::orderBy('updated_at', 'ASC')
					->where('status', 1)
					->first();
					
			if($proxy){
				$proxy->touch();

				$clone->update([
					'ip' => trim($proxy->ip),
					'port' => trim($proxy->port)
				]);
			}	
        }
        
        return $clone;
    }
	
	public function status()
    {
        $clone = Clon3::where('status', 'Live')->orderBy('updated_at', 'ASC')->first();
        
		if(!$clone){
			return null;
		}
		
		$clone->touch();

        if( empty($clone->ip) && empty($clone->port) ){
            $proxy = Proxy::orderBy('updated_at', 'ASC')->first();
            $proxy->touch();

            $clone->update([
                'ip' => trim($proxy->ip),
                'port' => trim($proxy->port)
            ]);
        }
        
        return $clone;
    }
	
	public function getAllCloneByStatus($status)
    {
        $clones = Clon3::where('status', $status)->get();
        
        return $clones;
    }
	
	public function serviceType($serviceType, $keywordType)
    {
		$liveClones = Clon3::whereHas('user', function ($query) use ($serviceType) {
				$query->where('service_type', $serviceType);
			});
			
		if( $keywordType === "all" ){
			$liveClones->with(['user.vipKeywords']);
			
			return $liveClones->get();
			
			
		}else{
			$liveClones->with([
				'user' => function ($query) use ($keywordType){
					$query->with([
						'vipKeywords' => function($q) use ($keywordType){
							$q->where('type', $keywordType);
						}
					]);
				}
			]);
		}
		
        return $liveClones->get();;
    }
}