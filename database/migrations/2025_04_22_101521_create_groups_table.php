<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id_group');
            $table->string('name', 50);
            $table->unsignedInteger('coach_id');
            $table->foreign('coach_id')->references('id_coach')->on('coach');
            $table->string('time');
            $table->string('day_of_week');
        });
    }

    public function down()
    {
        Schema::dropIfExists('groups');
    }
};
