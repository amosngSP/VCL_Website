<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use skymeyer\Vatsimphp;
use Illuminate\Support\Facades\Storage;

class EventsUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'events:update';

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
        //Check Events
        $endpoint = "https://my.vatsim.net/api/v1/events/all";
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $endpoint);
        $contents = $response->getBody();
        //Process and filter only our events
        $data = json_decode($contents,true);
        $icaos = json_decode(env('ICAO'),false);
        $events = collect($data["data"])->filter(
            function ($item) use ($icaos) {
                $airports = $item['airports'];
                foreach($airports as $airport){
                    if (in_array($airport["icao"],$icaos)){
                        return true;
                    }
                }
                return false;
            }
        )->values();
        Storage::put('EventsCache.txt',$events->toJson());

        return 0;
    }
}
