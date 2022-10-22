<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use skymeyer\Vatsimphp;
use Illuminate\Support\Facades\Storage;

class VatsimDataUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vatsimdata:update';

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
        //Caching data
        //Check ATC online
        $vatsim = new \Vatsimphp\VatsimData();
        $vatsim->loadData();
        return 0;
    }
}
