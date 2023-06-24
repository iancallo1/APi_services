<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware' => 'client.credentials'], function() use ($router){
    
    $router->group(['prefix' => 'api'], function($router) {
      //Converting Temperature
$router->post('/celsius-to-fahrenheit', 'TemperatureController@celsiusToFahrenheit');
$router->post('/fahrenheit-to-celsius', 'TemperatureController@fahrenheitToCelsius');

//Converting Speed
$router->post('/milesph-to-kilometersph', 'SpeedController@milesphToKilometersph');
$router->post('/kilometersph-to-milesph', 'SpeedController@kilometersphToMilesph');

//ROUTES FOR VOLUME CONVERSION
$router->post('/gallons-to-liters', 'VolumeController@gallonsToLiters');
$router->post('/liters-to-gallons', 'VolumeController@litersToGallons');

// ROUTES FOR LENGTH

$router->post('/inches-to-centimeters', 'LengthController@inchesToCentimeters');
$router->post('/centimeters-to-inches', 'LengthController@centimetersToInches');

$router->post('/feet-to-meters', 'LengthController@feetToMeters');
$router->post('/meters-to-feet', 'LengthController@metersToFeet');

$router->post('/miles-to-kilometers', 'LengthController@milesToKilometers');
$router->post('/kilometers-to-miles', 'LengthController@kilometersToMiles'); 
    });

});