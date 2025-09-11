<?php

use App\Http\Controllers\AdminWeatherController;
use App\Http\Controllers\ForecastController;
use App\Http\Controllers\WeatherController;
use App\Models\CityModel;
use App\Models\WeatherModel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prognoza',[WeatherController::class,'index']);

Route::get('/forecast/{city:name}',[FOrecastController::class,'index']);


Route::get('/admin/weather', function () {
    return view('weather');
});

Route::post('/admin/weather/upadte',[AdminWeatherController::class,'update'])->name('weather.update');


require __DIR__.'/auth.php';
