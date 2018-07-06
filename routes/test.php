<?php

use app\Helpers\Api;
use GuzzleHttp\Client;
use app\Helpers\Business;
use App\Clon3;
use App\Proxy;
use App\User;
use App\Post;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\DB;

Route::prefix('test')->group(function (){

    //test api
    Route::prefix('api')->group(function (){

        //newest post
        Route::get('newest-post', function (){
            //proxy
            $ip = "217.61.14.215";
            $port = 3128;

            //
            $uid = '100012885761300';
            $token = 'EAAAAAYsX7TsBABJApl8nuuUWQJFOECiJgKJgdikNSqScYUwGtlOcEaUGY014RNgKzNRH5WojuZAw90xFsDoIYDZAZAqfrjmvVfI1I5pBu3Rcj4aaO0Hx4zXFhbb0sENtW6qCviiUsPlDCwSucLtZCRmghPyhyps6K0KZB851WNbzl24syLepnnnpwpoSCDbnS0Xxvm94Ta1nArpI5JqQ1';

            $postId = Api::newestPost($uid, $token, $ip, $port);

            echo $postId;

            //var_dump($postId);
        });

        //popular reaction
        Route::get('popular-reaction', function (){
            //proxy
            $ip = "217.61.14.215";
            $port = 3128;

            //
            $postId = '131768897262635';
            $token = 'EAAAAAYsX7TsBABJApl8nuuUWQJFOECiJgKJgdikNSqScYUwGtlOcEaUGY014RNgKzNRH5WojuZAw90xFsDoIYDZAZAqfrjmvVfI1I5pBu3Rcj4aaO0Hx4zXFhbb0sENtW6qCviiUsPlDCwSucLtZCRmghPyhyps6K0KZB851WNbzl24syLepnnnpwpoSCDbnS0Xxvm94Ta1nArpI5JqQ1';

            $type = Api::popularReactionType($postId, $token, $ip, $port);

            echo $type;
        });

        //reaction
        Route::get('reaction', function (){
            //proxy
            $ip = "217.61.14.215";
            $port = 3128;

            //
            $postId = '10157764755731840';
            $token = 'EAAAAAYsX7TsBABJApl8nuuUWQJFOECiJgKJgdikNSqScYUwGtlOcEaUGY014RNgKzNRH5WojuZAw90xFsDoIYDZAZAqfrjmvVfI1I5pBu3Rcj4aaO0Hx4zXFhbb0sENtW6qCviiUsPlDCwSucLtZCRmghPyhyps6K0KZB851WNbzl24syLepnnnpwpoSCDbnS0Xxvm94Ta1nArpI5JqQ1';
            $type = 'LIKE';

            Api::reaction($postId, $type ,$token, $ip, $port);
        });

        //add friend
        Route::get('add-friend', function (){
            //proxy
            $ip = "217.61.14.215";
            $port = 3128;

            //
            $uid = '100025219658729';
            $token = 'EAAAAAYsX7TsBABJApl8nuuUWQJFOECiJgKJgdikNSqScYUwGtlOcEaUGY014RNgKzNRH5WojuZAw90xFsDoIYDZAZAqfrjmvVfI1I5pBu3Rcj4aaO0Hx4zXFhbb0sENtW6qCviiUsPlDCwSucLtZCRmghPyhyps6K0KZB851WNbzl24syLepnnnpwpoSCDbnS0Xxvm94Ta1nArpI5JqQ1';

            Api::addFriend($uid ,$token, $ip, $port);
        });

        //guzzle http
        Route::get('guzzle-http', function (){
            // Create a client with a base URI
            $client = new Client(['base_uri' => 'http://httpbin.org']);
            // Send a request to https://foo.com/api/test
            $response = $client->request('GET', '/get', [
                'proxy' => [
                    'http' => 'tcp://217.61.14.215:3128',
                    'https' => 'tcp://217.61.14.215:3128', // Use this proxy with "https",
                ],
                'headers' => [
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36',
                ],
                'debug' => true
            ]);

            //var_dump($response);

            $body = $response->getBody();

            echo $body;

            //print_r( (string)$response->getBody());

            //echo $response->origin;
        });

        //remote ip
        Route::get('ip', function (){
            if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
            {
                $ip=$_SERVER['HTTP_CLIENT_IP'];
            }
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
            {
                $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            else
            {
                $ip=$_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        });
		
		//post
		Route::get('post', function (){
            //$post = Post::find(4);
			
			$post = DB::table('post')
				->join('post_file', 'post.id', 'post_file.post_id')
				->get();
			
			//var_dump( $post->files()->get() );
			
			return $post;
        });
    });

    //test business
    Route::prefix('business')->group(function (){
        //get not used uid
        Route::get('/get-not-used-uids', function (){
            $business = new Business();

            $userId = 1;
            $cloneId = '100025098882345';

            return $business->getNotUsedUids($userId, $cloneId);

        });

        //get random uids
        Route::get('/get-random-not-used-uids', function (){
            $business = new Business();

            $userId = 1;
            $cloneId = '100025098882345';

            $notUsedUids = $business->getNotUsedUids($userId, $cloneId);

            $r = $business->randomNotUsedUids($notUsedUids, 100);

            return $r;

        });

        //created clone ago
        Route::get('/created-clone-ago', function (){
            $business = new Business();

            $clon3 = Clon3::first();

            $ago = $business->createdCloneAgo($clon3);

            return $ago;

        });

        //add friend to list
        Route::get('/add-friend-to-list-uids', function (){
            $business = new Business();

            $clon3 = Clon3::orderBy('updated_at', 'ASC')->first();
            $clon3->touch();

            var_dump($clon3);

            $proxy = Proxy::orderBy('updated_at', 'ASC')->first();
            $proxy->touch();

            $notUsedUids = $business->getNotUsedUids(1, $clon3->uid);
            $list = $business->randomNotUsedUids($notUsedUids, 2);

            var_dump($list);

            $business->addFriendToListUids($clon3, $list, $proxy);
        });

        Route::get('/common', function (){
             $user = User::first();

             //var_dump( $user->clones() );

             $uids = $user->uids();

            /**
             * uids of user, which clone used to add friend
             */
             foreach ( $uids as $uid ){
                 echo $uid->id . "</br>";
                 echo "</br>";
             }
        });

        //add friend by selenium
        Route::get('/add-friend', function (){

        });
    });

});