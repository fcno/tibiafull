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
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('world_id');
            $table->unsignedBigInteger('vocation_id');
            $table->string('name', length: 255)->unique();
            $table->unsignedSmallInteger('level');
            $table->timestamps();

            $table->foreign('world_id')->references('id')->on('worlds');
            $table->foreign('vocation_id')->references('id')->on('vocations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
