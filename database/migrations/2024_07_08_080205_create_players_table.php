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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('jersey_number');
            $table->string('photo')->nullable(); // Assuming photo is optional
            $table->string('player_role');
            $table->string('batting_style')->nullable();
            $table->string('bowling_style')->nullable();
            $table->boolean('is_active')->default(false);
            $table->foreignId('cricket_team_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
