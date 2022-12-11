<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_name');
            $table->string('email');
            $table->string('password');
            $table->string('address');
            $table->string('iconPath');
            $table->string('profile');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};