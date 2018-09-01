<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clon3;
use App\Proxy;
use Illuminate\Support\Facades\Log;

class LogController extends Controller
{
    public function index(Request $req)
    {
        Log::channel($req->type)->info($req->content);
    }
	
	
}