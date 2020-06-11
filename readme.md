## Installation

You can install the package via composer:

```bash
composer require quick-order/laravel-owm
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="QuickOrder\Weather\WeatherServiceProvider"
```

## Usage

```php
use \QuickOrder\Weather\Weather;

$weather = Weather::getWeather(
    'zip:5000,DK'
);

```