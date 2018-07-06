<?php

namespace app\Helpers;

use Curl\Curl;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class Api{

    /**
     * @param $uid
     * @param $token
     * @return bool
     */

    /*
    public static function newestPost($uid, $token){
        $curl = new Curl();
        $curl->get('https://graph.facebook.com/' . $uid . '/feed?limit=1&access_token=' . $token);

        if ($curl->error) {
            echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";

            return false;
        }

        //echo 'Response:' . "\n";

        return $curl->response->data[0]->id;
    }*/

    public static function newestPost($uid, $token, $ip, $port){
        $client = new Client(['base_uri' => 'https://graph.facebook.com']);

        // Send a request to https://graph.facebook.com/$uid/feed?limit=1&access_token=$token
        $response = $client->request('GET', $uid . '/feed', [
            'query' => [
                'limit' => 1,
                'access_token' => $token
            ],
            'proxy' => [
                'http' => 'tcp://' . $ip . ':' . $port,
                'https' => 'tcp://' . $ip . ':' . $port, // Use this proxy with "https",
            ],
            'headers' => [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36',
            ],
            //'debug' => true
        ]);

        return json_decode($response->getBody())->data[0]->id;
    }

    /**
     * @param $postId
     * @param $token
     * @return mixed
     */

    /*
    public static function popularReactionType($postId, $token){

        $TYPE = [
            'LIKE',
            'LOVE',
            'WOW',
            'HAHA',
            'SAD',
            'ANGRY',
            'THANKFUL'
        ];



        $typeResult = $TYPE[0];
        $totalCount = 0;

        foreach ($TYPE as $key => $type){
            $curl = new Curl();
            $curl->get('https://graph.facebook.com/' . $postId . '/reactions?summary=true&total_count&type=' . $type . '&access_token=' . $token);

            $totalCountTmp = $curl->response->summary->total_count;

            if( $totalCountTmp >= $totalCount ){
                $totalCount = $totalCountTmp;
                $typeResult = $TYPE[$key];
            }

        }

        return $typeResult;
    }*/

    public static function popularReactionType($postId, $token, $ip, $port){
        $TYPE = [
            //'LIKE',
            'LOVE',
            'WOW',
            'HAHA',
            'SAD',
            'ANGRY',
            'THANKFUL'
        ];

        $typeResult = $TYPE[0];
        $totalCount = 0;

        foreach ($TYPE as $key => $type){
            $client = new Client(['base_uri' => 'https://graph.facebook.com']);

            // Send a request to https://graph.facebook.com/$postId/reactions?summary=true&total_count&type=$type&access_token=$token
            $response = $client->request('GET', $postId . '/reactions', [
                'query' => [
                    'summary'       => 'true',
                    'type'          => $type,
                    'access_token'  => $token
                ],
                'proxy' => [
                    'http' => 'tcp://' . $ip . ':' . $port,
                    'https' => 'tcp://' . $ip . ':' . $port, // Use this proxy with "https",
                ],
                'headers' => [
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36',
                ],
                //'debug' => true
            ]);

            $totalCountTmp = json_decode($response->getBody())->summary->total_count;

            if( $totalCountTmp >= $totalCount ){
                $totalCount = $totalCountTmp;
                $typeResult = $TYPE[$key];
            }
        }

        return $typeResult;
    }

    /**
     * @param $postId
     * @param $type
     * @return bool
     */

    /*
    public static function reaction($postId, $type, $token){
        $curl = new Curl();
        $curl->post('https://graph.facebook.com/' . $postId . '/reactions?access_token=' . $token , array(
            'type' => $type
        ));

        if ($curl->error) {
            echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";

            return false;
        }
        return true;
    }*/

    public static function reaction($postId, $type, $token, $ip, $port){
        $client = new Client(['base_uri' => 'https://graph.facebook.com']);

        // Send a request to https://graph.facebook.com/$postId/reactions?access_token=$token
        try{
            $response = $client->request('POST', $postId . '/reactions', [
                'query' => [
                    'access_token'  => $token
                ],
                'form_params' => [
                    'type'          => $type
                ],
                'proxy' => [
                    'http' => 'tcp://' . $ip . ':' . $port,
                    'https' => 'tcp://' . $ip . ':' . $port, // Use this proxy with "https",
                ],
                'headers' => [
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36',
                ],
                //'debug' => true
            ]);

        }catch (RequestException $e){
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }

            return false;
        }

        return true;
    }

    /**
     * @param $uid
     * @param $token
     * @return bool
     */

    /*
    public static function addFriend($uid, $token){
        $curl = new Curl();
        $curl->post('https://graph.facebook.com/me/friends?uid=' . $uid . '&access_token=' . $token );

        if ($curl->error) {
            echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";

            return false;
        }
        return true;
    }*/

    public static function addFriend($uid, $token, $ip, $port){
        $client = new Client(['base_uri' => 'https://graph.facebook.com']);

        // Send a request to https://graph.facebook.com/me/friends?uid=$uid&access_token=$token
        try{
            $response = $client->request('POST', 'me/friends', [
                'query' => [
                    'uid' => $uid,
                    'access_token'  => $token
                ],
                'proxy' => [
                    'http' => 'tcp://' . $ip . ':' . $port,
                    'https' => 'tcp://' . $ip . ':' . $port, // Use this proxy with "https",
                ],
                'headers' => [
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36',
                ],
                //'debug' => true
            ]);

        }catch (RequestException $e){
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }

            return false;
        }

        return true;
    }
}