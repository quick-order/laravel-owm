<?php

namespace aat2703\Weather;

use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider {

    public function boot() {

        $this->publishes(
            [
                __DIR__ . '/../config/weather.php' => config_path('weather.php')
            ],
            'weather-config'
        );

        if (config('weather.default_routes')) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');
        }
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