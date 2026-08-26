<?php

namespace App\Http\Controllers;

use App\Support\Seo;
use App\Support\SiteData;
use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    public function howItWorks(): Response
    {
        $count = SiteData::skillsCountLabel();

        Seo::share([
            'title' => 'Cómo usar los prompts y skills de IA de ia-skills',
            'description' => "Guía rápida para copiar un prompt, rellenar sus campos y ejecutarlo en Claude, ChatGPT o Gemini. Qué es un skill, qué es un plugin y cómo instalarlos.",
            'canonical' => route('how-it-works'),
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Cómo funciona' => route('how-it-works'),
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'HowTo',
                    'name' => 'Cómo usar un prompt o skill de IA de ia-skills',
                    'inLanguage' => 'es',
                    'totalTime' => 'PT3M',
                    'step' => [
                        [
                            '@type' => 'HowToStep',
                            'position' => 1,
                            'name' => 'Elige tu profesión',
                            'text' => "Entra en la categoría de tu profesión y revisa las skills mejor valoradas por la comunidad. Hay {$count} entre las que elegir.",
                            'url' => route('professions.index'),
                        ],
                        [
                            '@type' => 'HowToStep',
                            'position' => 2,
                            'name' => 'Copia el prompt',
                            'text' => 'Cada ficha incluye el prompt completo, la herramienta recomendada, la dificultad y el tiempo estimado. Cópialo con un clic.',
                            'url' => route('skills.index'),
                        ],
                        [
                            '@type' => 'HowToStep',
                            'position' => 3,
                            'name' => 'Rellena los campos entre corchetes',
                            'text' => 'Los campos marcados con [corchetes] son los que debes sustituir por tu contexto: sector, producto, objetivo, público.',
                        ],
                        [
                            '@type' => 'HowToStep',
                            'position' => 4,
                            'name' => 'Ejecútalo en tu herramienta de IA',
                            'text' => 'Pega el prompt en Claude, ChatGPT, Gemini o la herramienta que uses y ajusta el resultado con las preguntas de seguimiento.',
                        ],
                    ],
                ],
            ],
        ]);

        return Inertia::render('HowItWorks');
    }
}
