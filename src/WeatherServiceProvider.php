<?php

namespace QuickOrder\Weather;

use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider {

	public function boot() {
		if ($this->app->runningInConsole()) {
			$this->publishes(
				[
					__DIR__ . '/../config/weather.php' => config_path('weather.php')
				],
				'weather-config'
			);
		}
	}

	public function register() {
		$this->mergeConfigFrom(__DIR__ . '/../config/weather.php', 'weather');
		$this->registerFacades();
	}

	/**
	 * Register any bindings to the app.
	 *
	 * @return void
	 */
	protected function registerFacades() {
		$this->app->singleton(
			\QuickOrder\Weather\Contracts\Weather::class,
			function ($app) {
				return new Weather();
			});
	}
}
