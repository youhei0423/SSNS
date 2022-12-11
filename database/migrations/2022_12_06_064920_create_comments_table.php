<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('post_id');
            $table->string('content');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
};