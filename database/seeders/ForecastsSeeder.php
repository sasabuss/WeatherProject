<?php

namespace Database\Seeders;

use App\Models\CitiesModel;
use App\Models\ForecastsModel;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForecastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cites = CitiesModel::all();
        foreach ($cites as $city) {
            for($i = 1; $i <= 5; $i++) {
                ForecastsModel::create([
                    'city_id' => $city->id,
                    'temperature'=> rand(15,30),
                    'forecast_date'=> Carbon::now()->addDays(rand(1,30))
                ]);
            }
        }
    }
}
