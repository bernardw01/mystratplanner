<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->date('review_period_start')->nullable();
            $table->date('review_period_end')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('reviewer_id')->nullable();
            $table->integer('rating')->nullable();
            $table->longText('review_text')->nullable();
            $table->string('review_type')->nullable();
            $table->string('review_status')->nullable();
            $table->index('user_id');
            $table->index('reviewer_id');
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
        Schema::dropIfExists('reviews');
    }
}
