<?php

namespace aat2703\Weather\Facades;

use Illuminate\Support\Facades\Facade;

class Weather extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'Weather';
    }
}
