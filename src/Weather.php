<?php

namespace QuickOrder\Weather;

use Cmfcmf\OpenWeatherMap;
use Http\Factory\Guzzle\RequestFactory;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

class Weather {

    protected static $owm;

    public function __construct() {
        self::$owm = self::getOwm();
    }

    private static function getOwm() {
        return self::$owm ? self::$owm : new OpenWeatherMap(
            config('weather.api_key'),
            GuzzleAdapter::createWithConfig([]),
            new RequestFactory()
        );
    }

    public static function getWeather($query, $units = 'imperial', $lang = 'en', $appid = '') {
        return self::getOwm()->getWeather($query, $units, $lang, $appid);
    }
}