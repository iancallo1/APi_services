<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//ROUTES FOR VOLUME CONVERSION
$router->post('/gallons-to-liters', 'VolumeController@gallonsToLiters');
$router->post('/liters-to-gallons', 'VolumeController@litersToGallons');

//ROUTES FOR TEMPERATURE CONVERSION
$router->post('/celsius-to-fahrenheit', 'TemperatureController@celsiusToFahrenheit');
$router->post('/fahrenheit-to-celsius', 'TemperatureController@fahrenheitToCelsius');

//ROUTES FOR SPEED CONVERSION
$router->post('/miles-to-kilometers', 'SpeedController@milesToKilometers');
$router->post('/kilometers-to-miles', 'SpeedController@kilometersToMiles');

//ROUTES FOR LENGTH CONVERSION
$router->post('/inches-to-centimeters', 'LengthController@inchesToCentimeters');
$router->post('/centimeters-to-inches', 'LengthController@centimetersToInches');

$router->post('/feet-to-meters', 'LengthController@feetToMeters');
$router->post('/meters-to-feet', 'LengthController@metersToFeet');