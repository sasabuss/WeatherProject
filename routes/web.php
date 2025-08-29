<?php

use App\Http\Controllers\CityTemperatureController;
use App\Http\Controllers\ForecastController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->prefix('/admin')->group(function () {

    Route::get('/all-temperatures', [CityTemperatureController::class,'preview']);

    Route::get('/delete-city/{city}',[CityTemperatureController::class,'delete'])
        ->name('delete-city');

    Route::get('/add-city',[CityTemperatureController::class,'index'])
        ->name('add-city');

    Route::post('/save-city', [CityTemperatureController::class, 'saveCity'])
        ->name('save-city');

    Route::get('/edit-city/{city}',[CityTemperatureController::class,'edit'])
    ->name('edit-city');

    Route::post('/update-city/{city}',[CityTemperatureController::class,'update'])
        ->name('update-city');

    Route::get('/weathers',[WeatherController::class,'index']);


});

Route::get('/forecast/{city}',[ForecastController::class,'index']);



require __DIR__.'/auth.php';
