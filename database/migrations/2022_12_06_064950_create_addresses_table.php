<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->integer('number');
            $table->string('pref');
            $table->string('city');
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};