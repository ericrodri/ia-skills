<?php

namespace Tests\Feature;

use App\Support\Guides;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewGuidesSmokeTest extends TestCase
{
    use RefreshDatabase;

    public function test_every_guide_renders_with_seo_and_valid_internal_links(): void
    {
        $slugs = array_column(Guides::all(), 'slug');

        $this->assertContains('agent-skills-estandar-abierto', $slugs);
        $this->assertContains('usar-ia-sin-filtrar-datos-de-clientes', $slugs);
        $this->assertContains('medir-si-la-ia-ahorra-tiempo', $slugs);

        foreach (Guides::all() as $guide) {
            $response = $this->get(route('guides.show', ['slug' => $guide['slug']]));
            $response->assertOk();

            $html = $response->getContent();

            // El SEO se emite en servidor: canonical, description y JSON-LD de Article.
            $this->assertStringContainsString('rel="canonical"', $html, $guide['slug']);
            $this->assertStringContainsString('"@type":"Article"', $html, $guide['slug']);
            $this->assertStringContainsString('"@type":"FAQPage"', $html, $guide['slug']);

            // Cada ancla del índice existe como id en el cuerpo.
            foreach (array_keys($guide['toc'] ?? []) as $anchor) {
                $this->assertStringContainsString('id="'.$anchor.'"', $guide['body'], "{$guide['slug']}#{$anchor}");
            }

            // Ningún enlace interno a una guía inexistente.
            preg_match_all('#href="/guias/([a-z0-9-]+)"#', $guide['body'].$guide['ctaBody'], $matches);
            foreach ($matches[1] as $target) {
                $this->assertNotNull(Guides::find($target), "{$guide['slug']} enlaza a /guias/{$target}, que no existe");
            }
        }
    }

    public function test_new_guides_are_listed_in_the_sitemap_and_llms_txt(): void
    {
        $sitemap = $this->get('/sitemap-guias.xml')->assertOk()->getContent();
        $llms = $this->get('/llms.txt')->assertOk()->getContent();

        foreach (['agent-skills-estandar-abierto', 'usar-ia-sin-filtrar-datos-de-clientes', 'medir-si-la-ia-ahorra-tiempo'] as $slug) {
            $this->assertStringContainsString("/guias/{$slug}", $sitemap, $slug);
            $this->assertStringContainsString("/guias/{$slug}", $llms, $slug);
        }
    }
}
