<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherService
{
    public static function getWeather(Request $request)
    {
        $city = $request->input('city');
        $apiKey = config('weather.key');

        try {
            $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
                'q' => "{$city}",
                'appid' => $apiKey
            ]);

            if ($response->successful()) {
                return response()->json($response->json());
            } else {
                return response()->json(['message' => 'City not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while fetching weather data'], 500);
        }
    }
}
