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

class AddFriend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'AddFriend:perform';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add friend';

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
        Log::channel('addfriend')->info('Begin add friend');
		
		$clones = Clon3::all();
		
		foreach($clones as $clone){
			Log::channel('addfriend')->info('Begin clone id : ' . $clone->id);
			
			try{
				$business = new Business();
			
				Log::channel('addfriend')->info("Clone : " . $clone);

				$unsentUids = $clone->unsentFriendRequestUids()->toArray();
				

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
				
				$N = 30;

				echo "N = " . $N . "\n";

				$uids = $clone->readyFriendRequestUids($unsentUids, $N);
				
				$clone->uids = $uids;
		
				
				//add friend
				$client = new Client(['base_uri' =>  config('services.python_server_url') ]);

				$response = $client->request('POST', '/add-friend', [
					'form_params' => [
						'clone' => json_encode($clone)
					],

					'headers' => [
						'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36',
					],
					//'debug' => true
				]);
				
				echo "Done" . "<br>";
				Log::channel('addfriend')->info("Clone id done: " . $clone->id);	
			}catch ( \Exception $e){
				Log::channel('addfriend')->info("Clone id ex: " . $clone->id . " " . $e);	
			}
			
		}
    }
}
