<?php

namespace Tests\Feature;

use App\Support\SearchConsoleOpportunities as Gsc;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchConsoleOpportunitiesTest extends TestCase
{
    use RefreshDatabase;

    private const PAGES = [
        ['title' => 'Cómo escribir prompts efectivos', 'url' => 'https://ia-skills.test/guias/prompts', 'text' => 'estructura de un prompt que funciona'],
        ['title' => 'Prompts de IA para abogados', 'url' => 'https://ia-skills.test/profesiones/legal', 'text' => 'legal contratos cláusulas'],
    ];

    public function test_it_parses_a_spanish_export(): void
    {
        $csv = "\xEF\xBB\xBF".'"Consultas principales","Clics","Impresiones","CTR","Posición"'."\n"
            .'"prompts efectivos","12","1.234","0,97 %","7,3"'."\n";

        $this->assertSame([[
            'query' => 'prompts efectivos',
            'clicks' => 12,
            'impressions' => 1234,
            'ctr' => 0.0097,
            'position' => 7.3,
        ]], Gsc::parse($csv));
    }

    public function test_it_parses_an_english_export(): void
    {
        $rows = Gsc::parse("Top queries,Clicks,Impressions,CTR,Position\nai prompts,3,500,0.6%,12.1\n");

        $this->assertSame(500, $rows[0]['impressions']);
        $this->assertEqualsWithDelta(12.1, $rows[0]['position'], 0.001);
    }

    public function test_it_rejects_a_csv_without_the_expected_columns(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Gsc::parse("Páginas principales,Clics\n/,3\n");
    }

    public function test_it_classifies_and_prioritises_opportunities(): void
    {
        $rows = [
            // Top 3 con CTR muy bajo → reescribir snippet
            ['query' => 'escribir prompts', 'clicks' => 10, 'impressions' => 5000, 'ctr' => 0.002, 'position' => 2.1],
            // Página 1-2 → reforzar
            ['query' => 'prompts para abogados', 'clicks' => 5, 'impressions' => 2000, 'ctr' => 0.0025, 'position' => 11],
            // Sin página que la cubra → contenido nuevo
            ['query' => 'plantilla de nóminas en excel', 'clicks' => 0, 'impressions' => 800, 'ctr' => 0, 'position' => 35],
            // Por debajo del umbral de impresiones → fuera
            ['query' => 'prompts', 'clicks' => 0, 'impressions' => 10, 'ctr' => 0, 'position' => 9],
            // Top 3 con CTR sano → nada que hacer
            ['query' => 'prompts efectivos', 'clicks' => 300, 'impressions' => 1000, 'ctr' => 0.3, 'position' => 1.2],
        ];

        $result = collect(Gsc::analyze($rows, 50, self::PAGES))->keyBy('query');

        $this->assertCount(3, $result);
        $this->assertSame(Gsc::ACTION_SNIPPET, $result['escribir prompts']['action']);
        $this->assertSame('https://ia-skills.test/guias/prompts', $result['escribir prompts']['page']);
        $this->assertSame(Gsc::ACTION_PUSH, $result['prompts para abogados']['action']);
        $this->assertSame('https://ia-skills.test/profesiones/legal', $result['prompts para abogados']['page']);
        $this->assertSame(Gsc::ACTION_NEW, $result['plantilla de nóminas en excel']['action']);
        $this->assertNull($result['plantilla de nóminas en excel']['page']);

        // Ordenado por clics potenciales.
        $this->assertSame('escribir prompts', $result->keys()->first());
    }

    public function test_the_command_prints_a_table_and_writes_a_csv(): void
    {
        $input = tempnam(sys_get_temp_dir(), 'gsc');
        $output = $input.'-out.csv';
        file_put_contents($input, "Top queries,Clicks,Impressions,CTR,Position\ncomo escribir prompts efectivos,1,900,0.1%,3\n");

        $this->artisan('seo:gsc-opportunities', ['file' => $input, '--output' => $output])
            ->expectsOutputToContain('Reescribir title/description')
            ->assertSuccessful();

        $this->assertStringContainsString('como escribir prompts efectivos', file_get_contents($output));

        @unlink($input);
        @unlink($output);
    }
}
