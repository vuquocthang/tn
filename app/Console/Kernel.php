<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        '\App\Console\Commands\AddFriend',
        //'\App\Console\Commands\AddFriend2',
        //'\App\Console\Commands\AddFriend3',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        //$schedule->command('AddFriend:perform')->everyFifteenMinutes();
        //$schedule->command('AddFriend2:perform')->dailyAt('12:00');
        //$schedule->command('AddFriend3:perform')->dailyAt('18:00');
		$schedule->command('Test:perform')->dailyAt('15:20');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
