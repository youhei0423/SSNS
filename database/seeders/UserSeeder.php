<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(){
        
        DB::table('users')->delete();
        
        DB::table('users')->insert([[
            'user_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'address' => '011002',
            'iconPath' => 'path',
            'profile' => '自己紹介sample',
        ],[
            'user_name' => 'sample',
            'email' => 'sample@gmail.com',
            'password' => Hash::make('password'),
            'address' => '131016',
            'iconPath' => 'path',
            'profile' => '自己紹介sample',
        ]]);
    }
}
