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
        Schema::create('game_relations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id');
            $table->json('developer_ids');
            $table->json('genre_ids');
            $table->json('mode_ids');
            $table->json('platform_ids');

            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_relations');
    }
};
