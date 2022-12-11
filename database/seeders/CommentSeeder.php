<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run(){
        
        DB::table('comments')->delete();
        
        DB::table('comments')->insert([[
            'user_id' => '1',
            'post_id' => '1',
            'content' => '返信内容',
        ],[
            'user_id' => '2',
            'post_id' => '2',
            'content' => '返信内容',
        ]]);
    }
}
