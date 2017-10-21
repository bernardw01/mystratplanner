<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGoals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goal_title');
            $table->longText('goal_text')->nullable();
            $table->integer('team_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('goal_status')->nullable();
            $table->date('due_date')->nullable();
            $table->timestamps();
            $table->index('team_id');
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goals');
    }
}
