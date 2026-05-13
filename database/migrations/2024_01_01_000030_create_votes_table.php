<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('skill_id')->constrained()->cascadeOnDelete();
            $table->smallInteger('value'); // 1 = upvote, -1 = downvote
            $table->timestamps();

            $table->unique(['user_id', 'skill_id']);
            $table->index('skill_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
