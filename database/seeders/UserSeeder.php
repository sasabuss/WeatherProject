<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $name = $this->command->ask('What is your name?');
        if(empty($name)) {
            $this->command->error('No name specified!');
            return;
        }
        $email = $this->command->ask('What is your email?');

        if(empty($email)) {
            $this->command->error('No email specified!');
            return;
        }

        $password = $this->command->ask('What is your password?');
        if(empty($password)) {

            $this->command->error('No password specified!');
            return;
        }

        $user = User::where('email', $email)->exists();
        if($user instanceof User) {
            $this->command->error("User already exists!");
            return;
        }

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make('password'),
        ]);
        $this->command->info('User created successfully!');

    }

}

//if(User::where('email', $email)->exists()) {
    //$this->command->error('User with this email already exists!');
   // return;
//}
