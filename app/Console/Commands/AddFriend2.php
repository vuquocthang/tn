<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\User;
use App\Proxy;
use App\Clon3;
use app\Helpers\Business;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use App\FriendRequest;

class AddFriend2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'AddFriend2:perform';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add friend 2';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Log::info('Add friend 2' . date('Y-m-d H:i:s'));

        $users = User::all();

        foreach ($users as $user){
            Log::info("User : " . $user);

            foreach ( $user->clones() as $clone ){
                $business = new Business();

                Log::info("Clone : " . $clone);

                $notUsedUids = $business->getNotUsedUids($user->id, $clone->uid);

                $N = 20;
                switch ( $business->createdCloneAgo($clone) % 8 ){
                    case 0:
                        $N = 20;
                        break;
                    case 1:
                        $N = 50;
                        break;
                    case 2:
                        $N = 100;
                        break;
                    case 3:
                        $N = 200;
                        break;
                    case 4:
                        $N = 300;
                        break;
                    case 5:
                        $N = 500;
                        break;
                    case 6:
                        $N = 1000;
                        break;
                    case 7:
                        $N = 1000;
                }

                echo "N = " . $N . "\n";

                if( $business->createdCloneAgo($clone) % 8 == 6 || $business->createdCloneAgo($clone) % 8 == 7  ){
                    //return 0;
                }else{
                    $uidsToAddFriend = $business->randomNotUsedUids($notUsedUids, $N);

                    $proxy = Proxy::orderBy('updated_at', 'ASC')->first();
                    $proxy->touch();

                    if( empty($clone->ip) && empty($clone->port) ){
                        Clon3::where('id', $clone->id)->update([
                            'ip' => $proxy->ip,
                            'port' => $proxy->port
                        ]);

                        $clone = Clon3::find($clone->id);
                    }

                    //add friend
                    $client = new Client(['base_uri' => 'http://192.168.81.1:5000/']);

                    $response = $client->request('POST', '/add-friend', [
                        'form_params' => [
                            'clone' => json_encode($clone),
                            'uids'  => json_encode($uidsToAddFriend)
                        ],

                        'headers' => [
                            'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36',
                        ],
                        //'debug' => true
                    ]);

                    //save friend request
                    foreach ($uidsToAddFriend as $uid){
                        FriendRequest::create([
                            'user_id' => $user->id,
                            'clone_id' => $clone->uid,
                            'uid' => $uid->uid
                        ]);
                    }
                }
            }
        }
    }
}
