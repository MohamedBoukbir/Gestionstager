<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create(['name' => 'Admin',
                             'email' =>'admin@gamil.com',
                             'password' =>Hash::make('test12345'),
        ]); 
        $admin->attachRole('Admin');

        $Superviser = User::create(['name' => 'Superviser',
        'email' =>'superviser@gamil.com',
        'password' =>Hash::make('test12345'),
        ]); 
        $Superviser->attachRole('Superviser');

        $Stagiare = User::create(['name' => 'Stagiare',
        'email' =>'stagiare@gamil.com',
        'password' =>Hash::make('test12345'),
        ]); 
        $Stagiare->attachRole('Stagiare');

        $Companie = User::create(['name' => 'Companie',
        'email' =>'companie@gamil.com',
        'password' =>Hash::make('test12345'),
        ]); 
        $Companie->attachRole('Companie');
    }
}
