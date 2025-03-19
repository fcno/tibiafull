<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('highscores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('character_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('highscore_date_id');
            $table->unsignedSmallInteger('rank');
            $table->string('title', length: 255)->nullable();
            $table->unsignedBigInteger('value');
            $table->timestamps();

            $table->foreign('character_id')->references('id')->on('characters');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('highscore_date_id')->references('id')->on('highscore_dates');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('highscores');
    }
};
