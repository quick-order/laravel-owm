<?php

namespace aat2703\Weather;

use Cmfcmf\OpenWeatherMap;
use Http\Factory\Guzzle\RequestFactory;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

class Weather {

    public static $owm;

    public function __construct() {
        self::$owm = new OpenWeatherMap(
            config('weather.API_KEY'),
            GuzzleAdapter::createWithConfig([]),
            new RequestFactory()
        );
    }

    public static function getWeather($query, $units = 'imperial', $lang = 'en', $appid = '') {
        return self::$owm->getWeather($query, $units, $lang, $appid);
    }

}