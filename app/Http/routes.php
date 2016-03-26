<?php

use App\Events\UserSignedUp;
use Illuminate\Support\Facades\Redis;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

//     Route::get('/', function () {

//     // In Episode 4, we'll use Laravel's event broadcasting.
//     //Redis::publish('test-channel', json_encode($data));
//     event(new UserSignedUp(Request::query('name')));

//     return view('welcome');
// });

Route::get('/', function() {
    // this doesn't do anything other than to
    // tell you to go to /fire
    return "go to /fire";
});

Route::get('fire', function () {
    // this fires the event
    event(new App\Events\EventName());
    return "event fired";
});

Route::get('test', function () {
    // this checks for the event
    return view('test');
});

});
