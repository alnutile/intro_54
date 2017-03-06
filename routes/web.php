<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example/{foo}', function($foo) {
    return $foo;
});

Route::get('/example/controller/{foo}', 'ExampleController@handle')->name("ExampleHandle");

Route::get('/example/queue/{foo}', function($foo) {

    dispatch(new \App\Jobs\SendEmailsJob($foo));

    return "Emails being sent";
});