<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SeoSkillSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $profession = Profession::where('slug', 'marketing')->firstOrFail();

        $title = 'Auditoría SEO técnica completa para apps y webs (Core Web Vitals + indexación JS)';
        $slug = Str::slug($title);

        if (Skill::where('slug', $slug)->exists()) {
            $this->command->warn('Ya existe esta skill.');
            return;
        }

        $prompt = <<<'PROMPT'
Actúa como un SEO técnico senior con 10+ años de experiencia en posicionamiento de aplicaciones web, SaaS y e-commerce a gran escala. Has auditado más de 200 sitios y gestionado tráfico orgánico de más de 10M de visitas/mes.

SITIO A AUDITAR:
- URL: [URL DEL SITIO]
- Tipo: [SaaS APP / E-commerce / Web corporativa / Marketplace / Blog]
- Stack tecnológico: [React / Vue / Next.js / Laravel / WordPress / etc.]
- Renderizado: [CSR / SSR / SSG / ISR — si no sabes escribe "desconocido"]
- Mercado objetivo: [PAÍS / IDIOMA]
- Competidor principal a comparar: [URL]

Realiza una auditoría SEO técnica exhaustiva estructurada en estas áreas:

## 1. INDEXABILIDAD Y RASTREO
- Estado del robots.txt: ¿bloquea recursos críticos de JS/CSS?
- Cobertura del sitemap.xml: páginas incluidas, frecuencia de actualización
- Canonical tags: self-referencing, cross-domain, paginación
- Parámetros URL que generan contenido duplicado
- Páginas huérfanas (sin enlaces internos que apunten a ellas)
- Cadenas de redirecciones, 302 usados como 301, redirect loops
- Errores 404 relevantes con impacto en autoridad de enlaces

## 2. CORE WEB VITALS (señal de ranking oficial desde 2021)
Para cada métrica: umbral de Google (verde/naranja/rojo), causas más comunes y optimizaciones específicas para el stack indicado.

**LCP — Largest Contentful Paint (objetivo: < 2.5s)**
- Preload de imagen hero (link rel="preload")
- Eliminación de render-blocking resources
- CDN + compresión Brotli
- Critical CSS inline, defer del resto

**INP — Interaction to Next Paint (objetivo: < 200ms)**
- Code splitting y lazy loading de componentes no críticos
- Eliminar tareas largas del main thread (> 50ms)
- Web Workers para procesamiento pesado
- Evitar re-renders innecesarios en React/Vue

**CLS — Cumulative Layout Shift (objetivo: < 0.1)**
- Reserva de dimensiones explícitas para imágenes, iframes y ads
- font-display: optional o swap con size-adjust
- Skeleton screens en lugar de spinners

**TTFB — Time to First Byte (objetivo: < 600ms)**
- Caché de servidor (Redis, Varnish, Edge caching)
- Configuración correcta de Cache-Control headers
- Reducción de queries N+1 en el backend

## 3. SEO TÉCNICO PARA JAVASCRIPT (crítico para SPAs y apps modernas)
- Evaluación del renderizado actual y estrategia recomendada para [el stack indicado]
- Diferencias entre CSR, SSR, SSG e ISR desde la perspectiva de Googlebot
- Pre-rendering vs. Dynamic Rendering: cuándo usar cada uno
- Verificación de que el contenido crítico (texto, enlaces, H1) existe en el HTML inicial, no solo tras hidratación
- Tiempo de respuesta para Googlebot (objetivo: < 200ms antes de ejecutar JS)
- Cómo implementar JSON-LD en aplicaciones React/Vue/Angular sin problemas de hidratación

## 4. ARQUITECTURA DE CONTENIDO Y ENLAZADO INTERNO
- Estructura de URLs: palabras clave incluidas, longitud óptima, jerarquía de carpetas semántica
- Silos temáticos: páginas pilar + clústeres de contenido (topic clusters)
- Profundidad máxima de clics: ninguna página importante a más de 3 clics del home
- Páginas de alta autoridad: cómo distribuir link equity internamente
- Estrategia de anchor text interno: variedad, relevancia, evitar sobre-optimización

## 5. ON-PAGE: TITLE, META Y ENCABEZADOS
- Title tags: 50-60 caracteres, keyword principal al inicio, sin duplicados
- Meta descriptions: 140-155 caracteres, propuesta de valor + CTA implícito, sin duplicados
- H1 único por página con keyword principal
- Jerarquía H2-H6 lógica y semántica
- Optimización de imágenes: alt text descriptivo, formatos WebP/AVIF, lazy loading, dimensiones explícitas

## 6. DATOS ESTRUCTURADOS (Schema.org) — fragmentos enriquecidos en SERPs
Código JSON-LD completo y listo para copiar para cada schema relevante según el tipo de sitio:

- **WebSite** + Sitelinks Searchbox
- **Organization** / LocalBusiness (con logo, contacto, redes sociales)
- **BreadcrumbList** (navegación estructurada)
- **FAQPage** (fragmentos de preguntas frecuentes en SERPs)
- **SoftwareApplication** (para SaaS y apps: rating, precio, sistema operativo)
- **HowTo** (para tutoriales: pasos, duración, herramientas)
- **Product** + **AggregateRating** + **Offer** (para e-commerce)

Para cada schema indica: dónde implementarlo, cómo validarlo en Rich Results Test.

## 7. INTERNACIONALIZACIÓN SEO (si el sitio tiene múltiples idiomas)
- Implementación correcta de hreflang: código ISO 639-1 + región ISO 3166-1
- x-default para usuarios sin idioma específico
- Comparativa: subdominios (es.sitio.com) vs. subdirectorios (/es/) vs. ccTLDs (.es) — recomendación con pros/contras según el caso
- Evitar contenido duplicado cross-idioma con canonical + hreflang coordinados

## 8. SEGURIDAD, HTTP Y SEÑALES DE CONFIANZA
- HTTPS en todo el sitio, sin mixed content activo o pasivo
- HTTP/2 o HTTP/3 (multiplexing, server push)
- Cabeceras de seguridad: HSTS, X-Content-Type-Options, CSP básico
- Gestión de www vs. non-www (una sola versión canónica con 301)

## 9. PLAN DE ACCIÓN PRIORIZADO
Tabla completa con todos los issues encontrados:
| # | Issue | Descripción | Impacto SEO (1-5) | Dificultad técnica (1-5) | Prioridad | Semana estimada |

Tres horizontes:
**Quick Wins (esta semana):** fixes de máximo impacto con mínimo esfuerzo
**Medio plazo (este mes):** mejoras de arquitectura y contenido
**Largo plazo (este trimestre):** refactorizaciones estructurales

## 10. KPIs Y MONITORIZACIÓN CONTINUA
Métricas a revisar, frecuencia y herramienta para cada una:
- Google Search Console: impresiones, CTR, posición media, cobertura de indexación
- Core Web Vitals en CrUX (datos de campo reales, no de laboratorio)
- PageSpeed Insights móvil (objetivo: > 90 en Performance)
- Screaming Frog: rastreo mensual para detectar nuevos errores
- Ahrefs/SEMrush: evolución de keywords y autoridad de dominio

## 11. BENCHMARK VS. COMPETIDOR
Análisis comparativo de [COMPETIDOR] vs. [TU SITIO] en:
- Core Web Vitals (móvil y escritorio)
- Número de páginas indexadas
- Errores técnicos detectados
- Implementación de structured data
- Velocidad media de carga
Conclusión: en qué áreas tienes ventaja y en cuáles debes alcanzarles.
PROMPT;

        Skill::create([
            'profession_id'     => $profession->id,
            'user_id'           => $admin->id,
            'title'             => $title,
            'slug'              => $slug,
            'description'       => 'La auditoría SEO técnica más completa para aplicaciones web modernas: Core Web Vitals, indexación de JavaScript (React/Vue/Next.js), datos estructurados, arquitectura de enlazado interno y plan de acción priorizado. Cubre todos los factores de ranking técnico de Google en un solo prompt.',
            'prompt_content'    => $prompt,
            'tool_name'         => 'Claude',
            'difficulty'        => 'advanced',
            'estimated_minutes' => 30,
            'use_case'          => 'Auditoría inicial de cualquier sitio web o app, antes de una migración de dominio, tras una caída de tráfico orgánico inexplicable o como revisión trimestral del estado técnico del SEO.',
            'status'            => 'published',
            'vote_score'        => 587,
            'views_count'       => 4230,
            'saves_count'       => 412,
            'version'           => 1,
        ]);

        $this->command->info('✅ Skill SEO creada: ' . $slug);
    }
}
