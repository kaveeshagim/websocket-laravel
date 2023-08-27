<?php

use App\Notifications\RealTimeNotification;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Events\BroadcastNotificationCreated;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/broadcast', function(){
    broadcast(new BroadcastNotificationCreated());
});



