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
}
