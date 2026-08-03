<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // throw new Exception('This is a test exception');
    Log::channel('custom')->info('This is a test log message');

    return view('welcome');
});
