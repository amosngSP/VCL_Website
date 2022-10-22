<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use skymeyer\Vatsimphp;

class VATSIMDataController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function returnOnlineControllers(){

        $prefixes = ['VV','VD','VL','VCL','DNA'];
        $vatsim = new \Vatsimphp\VatsimData();
        $vatsim->setConfig('cacheOnly', true);
        $vatsim->loadData();
        $collection = collect();
        $online = $vatsim
        ->getControllers()
        ->toArray();

        foreach ($prefixes as $prefix){

            //Laravel Collection is the superior sorting algorithm


            //$online = json_decode(json_encode($online),true);

            $controllers = collect(
                $online
            )
                ->filter(
                    function ($item) use ($prefix){
                        //$first = Str::contains($value['callsign'],['_CTR','_APP','_TWR','_GND']);
                            return str_contains(substr($item['callsign'],0,strlen($prefix)),$prefix) && ($item['facilitytype']>0);
                    }
                );

                //echo $prefix.$controllers;
                $collection = $collection->merge($controllers);
        }
        //return json_encode($collection);
        return $collection;
    }

    public function returnBookings(){
        $cache = json_decode(Storage::get('BookingsCache.txt'),true);
        if (count($cache)>0){
            return $cache;
        } else{
            return false;
        }

    }

    public function returnEvents(){
        $cache = json_decode(Storage::get('EventsCache.txt'),true);
        if (count($cache)>0){
            return $cache;
        } else{
            return false;
        }

    }

}

