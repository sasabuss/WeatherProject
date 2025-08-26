<?php

namespace Database\Seeders;

use App\Models\WeatherModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserWeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $city = $this->command->ask('What is your city?');

        if (empty($city)) {
            $this->command->error('Please enter a city');
            return;
        }

        $temperature = $this->command->ask('What is the temperature in city?');

        if (empty($temperature)) {
            $this->command->error('Please enter a temperature');
            return;
        }

        if(WeatherModel::where('city', $city)->exists()) {
            $this->command->error('City already exists');
            return;
        }

        WeatherModel::create([
            'city' => $city,
            'temperature' => $temperature,
        ]);

        $this->command->info("City {$city} with temperature {$temperature}°C added successfully!");
    }


}
