<?php

namespace Database\Seeders;

use App\Models\CityModel;
use App\Models\ForecastsModel;
use App\Models\WeatherModel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ForecastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = CityModel::all();
        $weathers = ForecastsModel::WEATHER;



        foreach ($cities as $city) {
            for($i = 1; $i <= 5; $i++) {

                $type = $weathers[array_rand($weathers)];

                if($type === 'snowy' || $type === 'rainy')
                {
                    $probability = rand(1,100);
                }

                else
                {
                    $probability = null;
                }


                ForecastsModel::create([
                    'city_id' => $city->id,
                    'temperature' => rand(20,35),
                    'forecast_date' => Carbon::now()->addDays(rand(1, 30)),
                    'weather_type' => $type,
                    'probability' => $probability
                ]);
            }
        }
    }
}
