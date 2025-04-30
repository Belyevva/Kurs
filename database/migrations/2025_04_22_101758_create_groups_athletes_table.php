<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsAthletesTable extends Migration
{
    public function up()
    {
        Schema::create('groups_athletes', function (Blueprint $table) {
            $table->unsignedInteger('group_id');
            $table->unsignedInteger('athlet_id');
            $table->primary(['group_id', 'athlet_id']);
            $table->foreign('group_id')->references('id_group')->on('groups');
            $table->foreign('athlet_id')->references('id_athlet')->on('athletes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('groups_athletes');
    }
};
