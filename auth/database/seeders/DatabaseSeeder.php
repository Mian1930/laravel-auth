<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'=>'Mian Azan',
            'email'=>"mianazan3@gmail.com",
            'password'=>Hash::make('secret')
        ]);

        \App\Models\User::create([
            'name'=>'Azan Farooq',
            'email'=>"mianazan280@gmail.com",
            'password'=>Hash::make('passcode')
        ]);
 

    }
}
