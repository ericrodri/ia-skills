<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Los tests no deben depender de que exista un build de Vite:
        // una página nueva rompería el suite hasta ejecutar `npm run build`.
        $this->withoutVite();
    }

    /**
     * Ficha antibots válida para los formularios públicos, emitida hace un
     * minuto (App\Support\BotGuard rechaza las de menos de 3 segundos).
     *
     * @return array<string, string>
     */
    protected function formGuard(): array
    {
        return [\App\Support\BotGuard::FIELD => \App\Support\BotGuard::token(time() - 60)];
    }
}
