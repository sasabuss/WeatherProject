<?php

namespace App\Http\Controllers;

use App\Models\CityModel;
use App\Models\ForecastsModel;

class ForecastController extends Controller
{
    public function index(CityModel $city)
    {
        return view('forecasts',compact('city'));
    }
}
