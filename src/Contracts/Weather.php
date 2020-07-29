<?php

namespace QuickOrder\Weather\Contracts;

use Cmfcmf\OpenWeatherMap;

interface Weather {

	/**
	 * @param $query
	 * @param string $units
	 * @param string $lang
	 * @param string $appid
	 * @return OpenWeatherMap\CurrentWeather
	 * @throws OpenWeatherMap\Exception
	 */

	public static function getWeather($query, $units = 'imperial', $lang = 'en', $appid = '');

	/**
	 * @param $query
	 * @param string $units
	 * @param string $lang
	 * @param string $appid
	 * @param int $days
	 * @return OpenWeatherMap\WeatherForecast
	 * @throws OpenWeatherMap\Exception
	 */

	public static function getWeatherForecast($query, $units = 'imperial', $lang = 'en', $appid = '', $days = 1);
}