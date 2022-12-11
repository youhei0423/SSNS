<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostUserTable extends Migration
{
    
    public function up()
    {
        Schema::create('post_user', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('post_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_user');
    }
};