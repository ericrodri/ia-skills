<?php

namespace Tests\Unit;

use App\Support\Seo;
use Tests\TestCase;

/**
 * La description es lo que Google enseña bajo el título en el SERP.
 *
 * Se recorta a 158 caracteres, pero el recorte tiene que caer en un espacio:
 * cortar por el carácter exacto parte la última palabra («...emocional,
 * urgen…») y eso es lo que ve quien decide si hacer clic.
 */
class SeoDescriptionTest extends TestCase
{
    public function test_la_description_se_recorta_por_palabra_entera(): void
    {
        $larga = 'Un skill escrito una vez funciona en Claude Code, Cursor, Copilot y ChatGPT, '
            .'y esta frase sigue lo suficiente como para pasarse del límite de caracteres sin remedio.';

        $description = Seo::normalize(['description' => $larga])['description'];

        $this->assertStringEndsWith('…', $description);
        $this->assertLessThanOrEqual(Seo::DESCRIPTION_MAX + 1, mb_strlen($description));

        // Lo que precede a los puntos suspensivos es una palabra completa del original.
        $ultima = mb_substr($description, 0, -1);
        $this->assertStringContainsString($ultima, $larga, 'el recorte partió una palabra');
    }

    public function test_una_description_que_cabe_no_se_toca(): void
    {
        $corta = 'Qué datos de clientes puedes escribir en un chat de IA y cuáles no.';

        $this->assertSame($corta, Seo::normalize(['description' => $corta])['description']);
    }

    public function test_los_saltos_de_linea_se_normalizan_antes_de_recortar(): void
    {
        $description = Seo::normalize(['description' => "Primera línea.\n\n  Segunda   línea."])['description'];

        $this->assertSame('Primera línea. Segunda línea.', $description);
    }
}
