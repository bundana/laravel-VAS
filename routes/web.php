<?php

use Bundana\Services\Messaging\Mnotify;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bundana', function () {
    // Create an instance of Mnotify, set the recipient, sender, and message, then send ->from("andul")
    // $response = Mnotify::to("0542345921")->message("Hello, this is a test message")->send();
    //  $response = Mnotify::to("0542345921")->message("Hello, this is a test message")->send();
    //  $response = new Mnotify();
    //  $response->newKeys(['apiKey' => 'ss', 'sender_id' =>'ss']);
    $response = Mnotify::to("0542345921")->message("Hello, this is a test message")->send();

    dd($response);
    // You can return the response or handle it as needed
    return $response;
});
