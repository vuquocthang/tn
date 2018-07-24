<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LichDangBaiController extends Controller
{
    //
	
	public function danhSach(){
		
		return view('user.lich-dang-bai.danh-sach');
	}
	
	public function xoa($id){
		
		try{
			$user = Auth::user();
		
			$postCatSchedule = $user->postCatSchedule($id);
			$postCatSchedule->postCatScheduleClones()->delete();
			$postCatSchedule->postCatSchedulePerformeds()->delete();
			$postCatSchedule->delete();
		}catch(\Exception $e){
			
		}
		
		return redirect()->route('lich-dang-bai.danh-sach');
	}
}
