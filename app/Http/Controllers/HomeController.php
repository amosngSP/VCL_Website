<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use App\Http\Controllers\VATSIMDataController;
 
class HomeController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function home()
    {
        $vatsim_data = new VATSIMDataController();
        $online_controllers = $vatsim_data->returnOnlineControllers();
        $bookings = $vatsim_data->returnBookings();
        $events = $vatsim_data->returnEvents();
        return view("welcome",compact('online_controllers','bookings','events'));
    }
}
