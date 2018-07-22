<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LichDangBaiController extends Controller
{
    //
	
	public function danhSach(){
		
		return view('user.lich-dang-bai.danh-sach');
	}
}
