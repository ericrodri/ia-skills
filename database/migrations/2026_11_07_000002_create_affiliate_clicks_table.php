<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Clics en enlaces de afiliado (/ir/{tool}). Sin datos personales: solo la
 * herramienta, el día y la página desde la que se hizo clic.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('affiliate_clicks', function (Blueprint $table) {
            $table->id();
            $table->string('tool', 40);
            $table->date('day');
            $table->string('from', 255)->nullable();
            $table->timestamp('created_at')->useCurrent();

            $table->index(['day', 'tool']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('affiliate_clicks');
    }
};
