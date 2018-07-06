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
}