<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use skymeyer\Vatsimphp;
use Illuminate\Support\Facades\Storage;

class AtcBookingsUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'atcbookings:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the VATSIM Data Cache';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $division = env('DIVISION','');
        $subdivision = env('SUBDIVISION','');
        //Check ATC bookings
        $endpoint = "https://atc-bookings.vatsim.net/api/booking";
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $endpoint, ['query'=> [
            'division' => $division,
            'subdivision' => $subdivision,
        ]]);
        $contents = $response->getBody();
        Storage::put('BookingsCache.txt',$contents);
        return 0;
    }
}
