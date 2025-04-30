<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachTable extends Migration
{
    public function up()
    {
        Schema::create('coach', function (Blueprint $table) {
            $table->increments('id_coach');
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->string('phone', 11);
            $table->date('birth');
            $table->string('password', 20);
        });
    }

    public function down()
    {
        Schema::dropIfExists('coach');
    }
};
