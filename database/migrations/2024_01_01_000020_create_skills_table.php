<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profession_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('prompt_content');
            $table->string('tool_name'); // ChatGPT, Claude, Midjourney, etc.
            $table->enum('difficulty', ['beginner', 'intermediate', 'advanced'])->default('beginner');
            $table->unsignedSmallInteger('estimated_minutes')->nullable();
            $table->text('use_case')->nullable();
            $table->enum('status', ['draft', 'published', 'rejected'])->default('published');
            $table->unsignedInteger('vote_score')->default(0);
            $table->unsignedInteger('views_count')->default(0);
            $table->unsignedInteger('saves_count')->default(0);
            $table->unsignedSmallInteger('version')->default(1);
            $table->timestamps();

            $table->index(['profession_id', 'status', 'vote_score']);
            $table->index(['status', 'created_at']);
            $table->index('tool_name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
