<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example/{foo}', function($foo) {
    return $foo;
});

Route::get('/example/controller/{foo}', 'ExampleController@handle')->name("ExampleHandle");

Route::get('/example/queue/{foo}', function($foo) {

    //release this 10 second job quickly
    $job = new \App\Jobs\SendEmailsJob($foo);

    dispatch($job);

    Log::debug("Done with Route Call");

    //respond immediately to the ui
    return "Emails being sent";
});