<?php

namespace Tests\Feature;

use App\Support\Guides;
use App\Support\Seo;
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
        $this->assertContains('ai-act-obligaciones-empresas', $slugs);
        $this->assertContains('ia-en-excel-y-google-sheets', $slugs);
        $this->assertContains('ia-para-reuniones-y-actas', $slugs);
        $this->assertContains('presentaciones-con-ia', $slugs);
        $this->assertContains('resumir-documentos-largos-con-ia', $slugs);
        $this->assertContains('errores-al-usar-ia-en-el-trabajo', $slugs);
        $this->assertContains('alucinaciones-de-la-ia', $slugs);
        $this->assertContains('se-nota-si-un-texto-lo-escribe-una-ia', $slugs);
        $this->assertContains('cv-y-carta-de-presentacion-con-ia', $slugs);
        $this->assertContains('agentes-de-escritorio-cowork-chatgpt-work', $slugs);
        $this->assertContains('que-tareas-de-tu-profesion-automatiza-la-ia', $slugs);
        $this->assertContains('gemini-notebook-antes-notebooklm', $slugs);
        $this->assertContains('ia-local-privada-en-tu-ordenador', $slugs);
        $this->assertContains('imagenes-con-ia-derechos-y-uso-comercial', $slugs);
        $this->assertContains('automatizar-sin-programar-n8n-make-zapier', $slugs);
        $this->assertContains('va-la-ia-a-sustituir-mi-trabajo', $slugs);
        $this->assertContains('microsoft-365-copilot-en-el-trabajo', $slugs);
        $this->assertContains('escribir-contenido-seo-con-ia', $slugs);
        $this->assertContains('entrevista-de-trabajo-con-ia', $slugs);
        $this->assertContains('ia-para-autonomos-y-pymes', $slugs);
        $this->assertContains('crear-tu-herramienta-con-ia-sin-programar', $slugs);
        $this->assertContains('estafas-con-ia-deepfakes-y-suplantacion', $slugs);
        $this->assertContains('ventana-de-contexto-conversaciones-largas', $slugs);
        $this->assertContains('aprender-ia-desde-cero-plan-de-30-dias', $slugs);
        $this->assertContains('video-y-audio-con-ia-en-el-trabajo', $slugs);
        $this->assertContains('ai-overviews-caida-de-clics', $slugs);
        $this->assertContains('keyword-research-con-ia', $slugs);
        $this->assertContains('medir-el-trafico-de-ia', $slugs);
        $this->assertContains('auditoria-seo-tecnica', $slugs);
        $this->assertContains('chatbot-de-atencion-al-cliente-con-ia', $slugs);
        $this->assertContains('eeat-experiencia-contenido-con-ia', $slugs);
        $this->assertContains('datos-estructurados-para-ia', $slugs);
        $this->assertContains('seo-programatico-con-ia', $slugs);
        $this->assertContains('seo-local-con-ia', $slugs);
        $this->assertContains('llms-txt-sirve-para-algo', $slugs);
        $this->assertContains('enlazado-interno-y-arquitectura-web', $slugs);
        $this->assertContains('actualizar-contenido-antiguo-con-ia', $slugs);
        $this->assertContains('menciones-de-marca-y-enlaces', $slugs);
        $this->assertContains('que-es-jev-modelo-system-one', $slugs);
        $this->assertContains('autoridad-tematica-y-clusters-de-contenido', $slugs);
        $this->assertContains('canibalizacion-de-keywords', $slugs);
        $this->assertContains('diagnosticar-caida-de-trafico-seo', $slugs);
        $this->assertContains('intencion-de-busqueda-en-seo', $slugs);
        $this->assertContains('paginas-que-google-no-indexa', $slugs);
        $this->assertContains('google-search-console-guia', $slugs);
        $this->assertContains('modo-ia-de-google', $slugs);
        $this->assertContains('titulos-y-meta-descriptions-que-consiguen-clics', $slugs);
        $this->assertContains('google-discover-como-aparecer', $slugs);
        $this->assertContains('seo-para-tiendas-online', $slugs);
        $this->assertContains('posicionar-una-web-nueva-en-google', $slugs);
        $this->assertContains('robots-txt-y-bots-de-ia', $slugs);
        $this->assertContains('herramientas-seo-gratis', $slugs);
        $this->assertContains('analisis-de-competencia-seo', $slugs);
        $this->assertContains('prompts-para-diseno-grafico', $slugs);
        $this->assertContains('migracion-web-sin-perder-seo', $slugs);

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

    /**
     * Las guías son contenido editorial: su description la escribimos nosotros,
     * así que no hay excusa para servirla recortada. Google corta por ancho en
     * píxeles (~155 caracteres en escritorio, ~115 en móvil), de modo que el
     * gancho tiene que caber en los primeros 115.
     */
    public function test_ninguna_guia_sirve_la_description_recortada(): void
    {
        foreach (Guides::all() as $guide) {
            $servida = Seo::normalize(['description' => $guide['description']])['description'];

            $this->assertStringEndsNotWith('…', $servida, "la description de {$guide['slug']} se sirve recortada");
            $this->assertSame($guide['description'], $servida, $guide['slug']);
        }
    }

    /**
     * El <title> se sirve con el sufijo de marca, así que lo que Google
     * recorta es `seoTitle` + ' | ia-skills'. Seo::TITLE_MAX existía como
     * constante sin que nada la comprobara, y 17 guías servían el title
     * truncado en resultados.
     */
    public function test_ninguna_guia_sirve_el_title_por_encima_del_limite(): void
    {
        foreach (Guides::all() as $guide) {
            $servido = Seo::normalize(['title' => $guide['seoTitle'] ?? $guide['title']])['title'];

            $this->assertLessThanOrEqual(
                Seo::TITLE_MAX,
                mb_strlen($servido),
                "el title de {$guide['slug']} ocupa ".mb_strlen($servido)." caracteres: «{$servido}»"
            );
        }
    }

    public function test_new_guides_are_listed_in_the_sitemap_and_llms_txt(): void
    {
        $sitemap = $this->get('/sitemap-guias.xml')->assertOk()->getContent();
        $llms = $this->get('/llms.txt')->assertOk()->getContent();

        foreach (['agent-skills-estandar-abierto', 'usar-ia-sin-filtrar-datos-de-clientes', 'medir-si-la-ia-ahorra-tiempo', 'ai-act-obligaciones-empresas', 'ia-en-excel-y-google-sheets', 'ia-para-reuniones-y-actas', 'presentaciones-con-ia', 'resumir-documentos-largos-con-ia', 'errores-al-usar-ia-en-el-trabajo', 'alucinaciones-de-la-ia', 'se-nota-si-un-texto-lo-escribe-una-ia', 'cv-y-carta-de-presentacion-con-ia', 'agentes-de-escritorio-cowork-chatgpt-work', 'que-tareas-de-tu-profesion-automatiza-la-ia', 'gemini-notebook-antes-notebooklm', 'ia-local-privada-en-tu-ordenador', 'imagenes-con-ia-derechos-y-uso-comercial', 'automatizar-sin-programar-n8n-make-zapier', 'va-la-ia-a-sustituir-mi-trabajo', 'microsoft-365-copilot-en-el-trabajo', 'escribir-contenido-seo-con-ia', 'entrevista-de-trabajo-con-ia', 'ia-para-autonomos-y-pymes', 'crear-tu-herramienta-con-ia-sin-programar', 'estafas-con-ia-deepfakes-y-suplantacion', 'ventana-de-contexto-conversaciones-largas', 'aprender-ia-desde-cero-plan-de-30-dias', 'video-y-audio-con-ia-en-el-trabajo', 'ai-overviews-caida-de-clics', 'keyword-research-con-ia', 'medir-el-trafico-de-ia', 'auditoria-seo-tecnica', 'chatbot-de-atencion-al-cliente-con-ia', 'eeat-experiencia-contenido-con-ia', 'datos-estructurados-para-ia', 'seo-programatico-con-ia', 'seo-local-con-ia', 'llms-txt-sirve-para-algo', 'enlazado-interno-y-arquitectura-web', 'actualizar-contenido-antiguo-con-ia', 'menciones-de-marca-y-enlaces', 'que-es-jev-modelo-system-one', 'autoridad-tematica-y-clusters-de-contenido', 'canibalizacion-de-keywords', 'diagnosticar-caida-de-trafico-seo', 'intencion-de-busqueda-en-seo', 'paginas-que-google-no-indexa', 'migracion-web-sin-perder-seo', 'google-search-console-guia', 'modo-ia-de-google', 'titulos-y-meta-descriptions-que-consiguen-clics', 'google-discover-como-aparecer', 'seo-para-tiendas-online', 'posicionar-una-web-nueva-en-google', 'prompts-para-diseno-grafico', 'robots-txt-y-bots-de-ia', 'herramientas-seo-gratis', 'analisis-de-competencia-seo'] as $slug) {
            $this->assertStringContainsString("/guias/{$slug}", $sitemap, $slug);
            $this->assertStringContainsString("/guias/{$slug}", $llms, $slug);
        }
    }
}
