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
        Schema::create('worlds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('pvp_type_id');
            $table->unsignedBigInteger('transfer_type_id');
            $table->unsignedBigInteger('game_world_type_id');
            $table->string('name', length: 255)->unique();
            $table->boolean('premium_only');
            $table->boolean('battleye_protected');
            $table->date('battleye_date')->nullable();
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('pvp_type_id')->references('id')->on('pvp_types');
            $table->foreign('transfer_type_id')->references('id')->on('transfer_types');
            $table->foreign('game_world_type_id')->references('id')->on('game_world_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worlds');
    }
};
