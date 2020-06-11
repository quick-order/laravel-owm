<?php

namespace QuickOrder\Weather;

use Cmfcmf\OpenWeatherMap;
use Http\Factory\Guzzle\RequestFactory;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

class Weather {

    /**
     * @var OpenWeatherMap|mixed
     */

    protected static $owm;

    public function __construct() {
        self::$owm = self::getOwm();
    }

    /**
     * @return OpenWeatherMap|mixed
     */

    private static function getOwm() {
        return self::$owm ? self::$owm : new OpenWeatherMap(
            config('weather.api_key'),
            GuzzleAdapter::createWithConfig([]),
            new RequestFactory()
        );
    }

    /**
     * @param $query
     * @param string $units
     * @param string $lang
     * @param string $appid
     * @return OpenWeatherMap\CurrentWeather
     * @throws OpenWeatherMap\Exception
     */

    public static function getWeather($query, $units = 'imperial', $lang = 'en', $appid = '') {
        return self::getOwm()->getWeather($query, $units, $lang, $appid);
    }

    /**
     * @param $query
     * @param string $units
     * @param string $lang
     * @param string $appid
     * @param int $days
     * @return OpenWeatherMap\WeatherForecast
     * @throws OpenWeatherMap\Exception
     */

    public static function getWeatherForecast($query, $units = 'imperial', $lang = 'en', $appid = '', $days = 1) {
        return self::getOwm()->getWeatherForecast($query, $units, $lang, $appid, $days);

    }
}