<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Keyword;
use App\Config;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    //
    public function index(){
        $configs = Config::all();

        return view('admin.config.index', [
            'configs' => $configs
        ]);
    }

    public function edit(Request $request){

        $input = $request->all();

        foreach ($input as $name => $value){
            echo $name . "</br>";

            Config::where('name', $name)->update([
                'value' => $value
            ]);
        }

        return redirect()->back()->with('message', 'Cập nhật cấu hình thành công !');
    }


}
