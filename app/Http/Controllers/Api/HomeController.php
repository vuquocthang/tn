<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clon3;
use App\Keyword;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function message(Request $request)
    {
        $message = $request->message;
        $name = $request->name;


        /*
        $keywords = Keyword::all();

        foreach ($keywords as $keyword){
            if ( strpos( strtolower($message), strtolower($keyword->key) ) !== false) {
                return str_replace('[name]', $name, $keyword->value);
            }
        }*/

        return 'Xin chào';
    }

    public function happyBirthday(Request $request)
    {
        $name = $request->name;

        $happybirthdayMessage = Keyword::where('type', 'birthday')->inRandomOrder()->first();

        return  str_replace("[name]", $name, $happybirthdayMessage->value );

    }

    public function scheduleMessage(Request $request){
        $name = $request->name;

        $scheduleMessage = Keyword::where('type', 'schedule_message')->inRandomOrder()->first();

        return  str_replace("[name]", $name, $scheduleMessage->value );
    }

    /**
     * @param Request $request
     */
    public function keywords(Request $request){
        $type = $request->type;

        $keywords = Keyword::where('type', $type)->get();

        return $keywords;
    }
}