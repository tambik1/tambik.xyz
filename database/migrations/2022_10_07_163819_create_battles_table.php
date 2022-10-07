<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('battles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tournament_id');
            $table->unsignedBigInteger('first_team');
            $table->unsignedBigInteger('second_team');
            $table->string('first_team_score')->nullable();
            $table->string('second_team_score')->nullable();
            $table->timestamp('date')->nullable();
            $table->bigInteger('position');

            $table->foreign('first_team')->references('id')->on('teams')->onDelete('restrict');
            $table->foreign('second_team')->references('id')->on('teams')->onDelete('restrict');
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('battles');
    }
};
