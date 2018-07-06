<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Proxy;

class ProxyController extends Controller
{

    public function index(){
        $proxy = Proxy::orderBy('updated_at', 'ASC')->first();
        $proxy->touch();
        return $proxy;
    }

}
