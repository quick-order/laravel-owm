<?php

namespace aat2703\Weather;

use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider {

    public function boot() {

        $this->publishes(
            [
                __DIR__ . '/../config/weather.php' => config('weather.php')
            ],
            'weather-config'
        );
    }

    public function register() {
        $this->mergeConfigFrom(__DIR__.'/../config/weather.php', 'weather');
    }

    /**
     * Register any bindings to the app.
     *
     * @return void
     */
    protected function registerFacades() {
        $this->app->singleton('Weather', function ($app) {
            return new Weather();
        });
    }
}