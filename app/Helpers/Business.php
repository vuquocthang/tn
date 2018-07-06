<?php

namespace app\Helpers;

use app\Helpers\Api;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\FriendRequest;
use App\Proxy;

class Business {

    public function __construct()
    {

    }

    /**
     * @param $userId
     * @param $cloneId
     * @return mixed
     */
    public function getNotUsedUids($userId, $cloneUid){

        $uids = DB::select( DB::raw("
            SELECT * FROM uid
            WHERE uid 
            NOT IN ( SELECT uid FROM send_friend_request WHERE clone_id = ${cloneUid} ) 
            AND user_id = ${userId} 
        "));

        return $uids;
    }

    /**
     * @param $uids
     * @param $quantity
     * @return array
     */
    public function randomNotUsedUids($uids, $quantity){
        shuffle($uids);
        return array_slice($uids, 0, $quantity);
    }

    /**
     * @param $clone
     * @return mixed
     */
    public function createdCloneAgo($clone){
        $today = Carbon::now();
        $createdAt = Carbon::createFromFormat('Y-m-d H:i:s', $clone->created_at);

        $diffInDays = $today->diffInDays($createdAt);

        return $diffInDays;
    }

    public function addFriendToListUids($clone, $uids, $proxy){
        foreach ($uids as $uid ){
            try{
                Api::addFriend($uid->uid, $clone->token, $proxy->ip, $proxy->port);

                FriendRequest::create([
                    'user_id' => $clone->user_id,
                    'clone_id' => $clone->uid,
                    'uid' => $uid->uid
                ]);

            }catch (Exception $e){

            }
        }
    }

    /**
     * @param $clone
     * @param $uids
     * @param $proxy
     */
    public function addFriendByRule($clone){

        $userId = $clone->user_id;

        $notUsedUids = $this->getNotUsedUids($userId, $clone->uid);
        $createdCloneAgo = $this->createdCloneAgo($clone);


        switch ($createdCloneAgo % 8){
            case 0:
                $list = $this->randomNotUsedUids($notUsedUids, 20);

                $proxy = Proxy::orderBy('updated_at', 'ASC')->first();
                $proxy->touch();

                $this->addFriendToListUids( $clone, $list, $proxy );
                break;
            case 1:
                $list = $this->randomNotUsedUids($notUsedUids, 50);

                $proxy = Proxy::orderBy('updated_at', 'ASC')->first();
                $proxy->touch();

                $this->addFriendToListUids( $clone, $list, $proxy );

                break;
            case 2:
                $list = $this->randomNotUsedUids($notUsedUids, 100);

                $proxy = Proxy::orderBy('updated_at', 'ASC')->first();
                $proxy->touch();

                $this->addFriendToListUids( $clone, $list, $proxy );

                break;
            case 3:
                $list = $this->randomNotUsedUids($notUsedUids, 200);

                $proxy = Proxy::orderBy('updated_at', 'ASC')->first();
                $proxy->touch();

                $this->addFriendToListUids( $clone, $list, $proxy );

                break;
            case 4:
                $list = $this->randomNotUsedUids($notUsedUids, 300);

                $proxy = Proxy::orderBy('updated_at', 'ASC')->first();
                $proxy->touch();

                $this->addFriendToListUids( $clone, $list, $proxy );
                break;
            case 5:
                $list = $this->randomNotUsedUids($notUsedUids, 500);

                $proxy = Proxy::orderBy('updated_at', 'ASC')->first();
                $proxy->touch();

                $this->addFriendToListUids( $clone, $list, $proxy );
                break;
            case 6:
                $list = $this->randomNotUsedUids($notUsedUids, 1000);

                $proxy = Proxy::orderBy('updated_at', 'ASC')->first();
                $proxy->touch();

                $this->addFriendToListUids( $clone, $list, $proxy );
                break;
            case 7:
                $list = $this->randomNotUsedUids($notUsedUids, 1000);

                $proxy = Proxy::orderBy('updated_at', 'ASC')->first();
                $proxy->touch();

                $this->addFriendToListUids( $clone, $list, $proxy );
                break;
        }

    }

    public function react(){

    }

    public function happyBirthday(){

    }

    public function inbox(){

    }
}