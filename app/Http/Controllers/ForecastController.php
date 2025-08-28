<?php

namespace App\Http\Controllers;

class ForecastController extends Controller
{
    public function index($city)
    {
        $forecasts = [
            'Beograd' => [25, 29, 33, 44, 55],
            'Sarajevo' => [33, 44, 32, 27, 31]
        ];

        $city = strtolower($city);

        if (!array_key_exists($city, $forecasts)) {
            die('Ovaj grad ne postoji');
        }
    }
}
