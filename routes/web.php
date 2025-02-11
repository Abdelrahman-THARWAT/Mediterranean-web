<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|ar'], 'middleware' => 'setlocale'], function () {

    // Home route
    Route::get('/', function () {
        return view('index');
    });

    // Contact us route
    Route::get('contact-us', function () {
        return view('22-contact');
    });
});

// Default redirect if no locale is set
Route::get('/', function () {
    return redirect('en'); // Default to 'en'
});
