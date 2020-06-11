<?php

use Illuminate\Support\Facades\Route;
use \aat2703\Weather\Weather;

Route::prefix('weather')->group(function() {

    Route::get(
        '',
        function() {
            return Weather::getWeather(request()->get('query'));
        }
    );
});
