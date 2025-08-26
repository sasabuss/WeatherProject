<?php

namespace Database\Seeders;

use App\Models\WeatherModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weatherCast = [
            'Beograd' =>22,
            'Novi sad' =>33,
            'Zagreb' =>44,
            'Sarajevo' =>34,
        ];

        foreach ($weatherCast as $city => $temperature) {
            WeatherModel::create([
                'city' => $city,
                'temperature' => $temperature,
            ]);
        }
    }
}
