<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\WeatherService;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        return WeatherService::getWeather($request);
    }
}
