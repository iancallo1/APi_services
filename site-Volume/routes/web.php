<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/celsius-to-fahrenheit', 'TemperatureController@celsiusToFahrenheit');
$router->post('/fahrenheit-to-celsius', 'TemperatureController@fahrenheitToCelsius');

$router->get('/convert/{from}/{to}/{value}', 'ConversionController@convert');

