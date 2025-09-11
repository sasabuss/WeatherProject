<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FakerUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $email = $this->command->getOutput()->ask('What is your email?');
        if($email===null)
        {
            $this->command->getOutpu()->error('Please enter your email');
        }

        $user = $this->command->getOutput()->ask('What is your name?','John Doe');
        if($user===null)
        {
            $this->command->getOutput()->error('Please enter your name');
        }
        $password = $this->command->getOutput()->ask('What is your password?','123456');
        if($password===null)
        {
            $this->command->getOutput()->error('Please enter your password');
        }

        $userExists=User::where(['email'=>$email])->first();

        if($userExists)
        {
            $this->command->getOutput()->error('This email is already registered');
            return;
        }


        User::create([
            'name' => $user,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->command->getOutput()->info('User was created');




    }
}
