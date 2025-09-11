<?php

namespace Database\Seeders;

use App\Models\WeatherModel;
use Illuminate\Database\Seeder;

class UserWeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city = $this->command->ask('What is your city?',);
        if($city == null)
        {
            $this->command->getOutput()->error('City is missing');
            return;
        }
        $temperature = $this->command->ask('What is your temperature?',);
        if($temperature == null)
        {
            $this->command->getOutput()->error('Temperature is missing');
            return;
        }



        WeatherModel::create([
            'city' => $city,
            'temperature' => $temperature,
        ]);

        $this->command->info("City was created");


    }


}
