## Installation


Add github repository and package name to composer.json
```json
{
    "require": {
         "quick-order/laravel-owm": "0.*"
     },
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/quick-order/laravel-owm"
        }
    ]
}
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="QuickOrder\Weather\WeatherServiceProvider"
```

## Usage

```php
use \QuickOrder\Weather\Weather;

$weather = Weather::getWeather(
    'Odense'
);

$weatherForecast = Weather::getWeatherForecast(
    'Odense'
);

```