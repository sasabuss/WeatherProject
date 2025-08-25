<?php

namespace App\Http\Controllers;

use App\Models\CityTemperaturesModel;
use Illuminate\Http\Request;

class CityTemperatureController extends Controller
{
    public function preview()
    {
        $cities = CityTemperaturesModel::all();
        return view('weather',compact('cities'));

    }
}
