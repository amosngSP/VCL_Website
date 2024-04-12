<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VATSIMDataController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/staff',
function (){
    return view('staff');
}
)->name('staff');

Route::get('/roster',
function (){
    return view('roster');
}
)->name('roster');

Route::get('/sceneries',
function (){
    return view('scenery');
}
)->name('scenery');

Route::get('/charts',
function (){
    return view('charts');
}
)->name('charts');

Route::get('/joinus',
function (){
    return view('joinus');
}
)->name('joinus');
           

Route::get('/logo_pack',
function (){
    return view('logo_pack');
}
)->name('logo_pack');

Route::get('/stream',
function (){
    return view('stream');
}
)->name('stream');


Route::get('/api/online_controllers',[VATSIMDataController::class,'returnOnlineControllers']);
