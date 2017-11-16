<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',20);
            $table->string('realname',50)->nullable();
            $table->string('password',32);
            $table->tinyInteger('groupid');
            $table->tinyInteger('webgroupid');
            $table->unsignedInteger('admining')->nullable();
            $table->string('school',50)->nullable();
            $table->tinyInteger('sbujectid');
            $table->tinyInteger('manageid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
