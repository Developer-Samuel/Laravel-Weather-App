<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/weather/get', [WeatherController::class, 'getWeather']);

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
