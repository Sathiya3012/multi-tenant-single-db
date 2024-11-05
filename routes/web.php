<?php

use Illuminate\Support\Facades\Route;

Route::group(['domain' => config('tenancy.central_domains.0')], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
