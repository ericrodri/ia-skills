<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    public function run(): void
    {
        $professions = [
            ['name' => 'Marketing', 'slug' => 'marketing', 'icon' => '📣', 'description' => 'Skills de IA para marketers: copywriting, SEO, campañas, análisis de audiencias.', 'sort_order' => 1],
            ['name' => 'Desarrollo', 'slug' => 'desarrollo', 'icon' => '💻', 'description' => 'Skills de IA para developers: generación de código, debugging, documentación, testing.', 'sort_order' => 2],
            ['name' => 'Diseño', 'slug' => 'diseno', 'icon' => '🎨', 'description' => 'Skills de IA para diseñadores: generación de imágenes, briefs, feedback visual.', 'sort_order' => 3],
            ['name' => 'Ventas', 'slug' => 'ventas', 'icon' => '💼', 'description' => 'Skills de IA para equipos de ventas: outreach, objeciones, propuestas, CRM.', 'sort_order' => 4],
            ['name' => 'Product Management', 'slug' => 'product-management', 'icon' => '🗺️', 'description' => 'Skills de IA para PMs: PRDs, user stories, roadmaps, análisis de feedback.', 'sort_order' => 5],
            ['name' => 'RRHH', 'slug' => 'rrhh', 'icon' => '👥', 'description' => 'Skills de IA para recruiters y HR: job descriptions, screening, onboarding.', 'sort_order' => 6],
            ['name' => 'Finanzas', 'slug' => 'finanzas', 'icon' => '📊', 'description' => 'Skills de IA para finanzas: análisis, modelos, reportes, previsiones.', 'sort_order' => 7],
            ['name' => 'Legal', 'slug' => 'legal', 'icon' => '⚖️', 'description' => 'Skills de IA para abogados: análisis de contratos, redacción legal, research.', 'sort_order' => 8],
            ['name' => 'Customer Support', 'slug' => 'customer-support', 'icon' => '🎧', 'description' => 'Skills de IA para soporte: respuestas, escalados, FAQs, análisis de tickets.', 'sort_order' => 9],
            ['name' => 'Freelancers', 'slug' => 'freelancers', 'icon' => '🚀', 'description' => 'Skills de IA para freelancers y solopreneurs: productividad, propuestas, clientes.', 'sort_order' => 10],
        ];

        foreach ($professions as $data) {
            Profession::firstOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
