<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    public function run(){
        
        DB::table('images')->delete();
        
        DB::table('images')->insert([[
            'post_id' => '1',
            'image-path' => 'path',
        ],[
            'post_id' => '2',
            'image-path' => 'path',
        ]]);
    }
}
