<?php

use App\Http\Controllers\CityTemperatureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/weather', [CityTemperatureController::class,'preview']);





require __DIR__.'/auth.php';
