<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id('playerID');
            $table->string('username', 255);
            $table->string('password', 255);
            $table->string('email', 255);
            $table->date('joinDate');
            $table->integer('age')->nullable();
            $table->string('occupation', 255)->nullable();
            $table->string('gender', 50)->nullable();
            $table->string('city', 255)->nullable();
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
