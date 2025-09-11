<?php

namespace App\Http\Controllers;

use App\Models\ForecastsModel;
use App\Models\WeatherModel;

class WeatherController extends Controller
{
    public function index()
    {
        $forecasts = WeatherModel::all();


        return view('prognoza', compact('forecasts'));
    }

}
