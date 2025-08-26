<?php

namespace App\Http\Controllers;

use App\Models\WeatherModel;
use Illuminate\Http\Request;

class CityTemperatureController extends Controller
{
    public function preview()
    {
        $cities = WeatherModel::all();
        return view('all-temperatures',compact('cities'));

    }

    public function delete(WeatherModel $city)
    {
        $city->delete();
        return redirect('/admin/all-temperatures');
    }

    public function index()
    {
        return view('add-city');
    }

    public function saveCity(Request $request)
    {
       $request->validate([
           'city' => 'required|string',
           'temperature' => 'required|numeric',
       ]);

       WeatherModel::create([
           'city' => $request->get('city'),
           'temperature' => $request->get('temperature'),
       ]);

       return redirect('/admin/all-temperatures');
    }

    public function edit(WeatherModel $city)
    {
        return view('edit-city',compact('city'));
    }

    public function update(Request $request, WeatherModel $city)
    {
        $request->validate([
            'city' => 'required|string',
            'temperature' => 'required|numeric',
        ]);

        $city->update([
            'city' => $request->get('city'),
            'temperature' => $request->get('temperature'),
        ]);

        return redirect('/admin/all-temperatures');
    }
}
