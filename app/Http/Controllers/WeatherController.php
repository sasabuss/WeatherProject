<?php

namespace App\Http\Controllers;

use App\Models\WeatherModel;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        $weathers = WeatherModel::all();
        return view('preview-temperatures', compact('weathers'));

    }
}
