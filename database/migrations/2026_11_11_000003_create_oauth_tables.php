<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * OAuth 2.1 para el conector MCP (App\Support\OAuth).
 *
 * - oauth_clients: aplicaciones registradas (Claude se registra solo, por
 *   registro dinámico, RFC 7591).
 * - oauth_auth_codes: códigos de un solo uso, con PKCE, que viven minutos.
 * - oauth_tokens: pares de acceso y renovación. Solo se guarda el resumen
 *   SHA-256 de cada token, nunca el token en claro.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oauth_clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_id', 64)->unique();
            $table->string('secret_hash', 64)->nullable();
            $table->string('name', 120);
            $table->json('redirect_uris');
            $table->timestamps();
        });

        Schema::create('oauth_auth_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code_hash', 64)->unique();
            $table->foreignId('client_id')->constrained('oauth_clients')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('redirect_uri', 2000);
            $table->string('code_challenge', 128);
            $table->string('scope', 200);
            $table->string('resource', 500)->nullable();
            $table->timestamp('expires_at');
            $table->timestamps();
        });

        Schema::create('oauth_tokens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('oauth_clients')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('access_hash', 64)->unique();
            $table->string('refresh_hash', 64)->unique();
            $table->string('scope', 200);
            $table->string('resource', 500)->nullable();
            $table->timestamp('access_expires_at');
            $table->timestamp('refresh_expires_at');
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
            $table->index(['user_id', 'client_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oauth_tokens');
        Schema::dropIfExists('oauth_auth_codes');
        Schema::dropIfExists('oauth_clients');
    }
};
