<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use skymeyer\Vatsimphp;
use App\Console\Commands\AtcBookingsUpdate;
use App\Console\Commands\EventsUpdate;
use App\Console\Commands\VatsimDataUpdate;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        $schedule->command('vatsimdata:update')->everyFiveMinutes();
        $schedule->command('atcbookings:update')->hourly();
        $schedule->command('events:update')->hourly();
        
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
