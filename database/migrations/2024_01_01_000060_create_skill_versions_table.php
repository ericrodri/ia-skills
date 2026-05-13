<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('skill_versions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skill_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->unsignedSmallInteger('version');
            $table->text('prompt_content');
            $table->text('changelog')->nullable();
            $table->timestamps();

            $table->unique(['skill_id', 'version']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skill_versions');
    }
};
