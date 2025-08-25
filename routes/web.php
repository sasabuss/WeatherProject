<?php

use App\Http\Controllers\CityTemperatureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/all-temperatures', [CityTemperatureController::class,'preview']);

Route::get('/admin/delete-city/{city}',[CityTemperatureController::class,'delete'])
->name('delete-city');

require __DIR__.'/auth.php';
