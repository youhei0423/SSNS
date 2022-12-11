<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(){
        
        DB::table('posts')->delete();
        
        DB::table('posts')->insert([[
            'user_id' => '1',
            'content' => '投稿sample',
            'post_address' => '131016',
            'user_address' => '011002',
        ],[
            'user_id' => '2',
            'content' => '投稿sample',
            'post_address' => '011002',
            'user_address' => '011002',
        ]]);
    }
}
