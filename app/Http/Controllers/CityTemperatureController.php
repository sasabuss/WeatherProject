<?php

namespace App\Http\Controllers;

use App\Models\CityTemperaturesModel;
use Illuminate\Http\Request;

class CityTemperatureController extends Controller
{
    public function preview()
    {
        $cities = CityTemperaturesModel::all();
        return view('all-temperatures',compact('cities'));

    }

    public function delete(CityTemperaturesModel $city)
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

       CityTemperaturesModel::create([
           'city' => $request->get('city'),
           'temperature' => $request->get('temperature'),
       ]);

       return redirect('/admin/all-temperatures');
    }

    public function edit(CityTemperaturesModel $city)
    {
        return view('edit-city',compact('city'));
    }

    public function update(Request $request,CityTemperaturesModel $city)
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
