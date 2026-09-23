<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Suscriptores del resumen semanal que no tienen cuenta.
     *
     * Los usuarios registrados siguen usando users.newsletter_opt_in; esta
     * tabla es para quien se apunta con solo su email desde las guías o el
     * pie de la web. Doble opt-in: no recibe nada hasta confirmar
     * (confirmed_at), para que nadie pueda apuntar direcciones ajenas.
     */
    public function up(): void
    {
        Schema::create('newsletter_subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            // Dónde se apuntó (guia:slug, footer…), para saber qué formulario convierte.
            $table->string('source', 120)->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('unsubscribed_at')->nullable();
            $table->timestamps();

            $table->index(['confirmed_at', 'unsubscribed_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('newsletter_subscribers');
    }
};
