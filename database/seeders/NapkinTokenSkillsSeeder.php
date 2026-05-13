<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class NapkinTokenSkillsSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            [
                'profession_id' => 1, // Marketing
                'user_id' => 1,
                'title' => 'Convierte cualquier texto en diagramas profesionales al instante con Napkin.ai',
                'slug' => 'texto-a-diagramas-napkin-ai',
                'description' => 'Napkin.ai transforma texto plano en diagramas, infografías, flowcharts y mapas mentales con un solo clic. Sin Figma, sin Canva, sin diseñador. Pegas tus notas o un párrafo, eliges el visual que genera la IA y exportas listo para presentaciones, posts o documentos.',
                'prompt_content' => <<<'PROMPT'
## Workflow: Texto a diagrama con Napkin.ai

### 1. Acceder
Ve a [napkin.ai](https://www.napkin.ai) y crea una cuenta gratuita (500 créditos/semana).

### 2. Pegar tu contenido
Escribe o pega directamente en el editor:
- Bullet points de una idea
- Un párrafo explicando un proceso
- Notas de una reunión
- Un texto generado por IA

### 3. Generar el visual
Selecciona el texto y haz clic en el icono ⚡ que aparece al lado.

Napkin genera automáticamente varias opciones visuales. Elige la que mejor encaje.

### Tipos de visuales disponibles (+30)
- **Flowcharts** — procesos paso a paso
- **Mapas mentales** — lluvia de ideas y conceptos
- **Matrices 2x2** — frameworks de decisión
- **Timelines** — roadmaps y cronologías
- **Organigramas** — jerarquías y equipos
- **Embudos** — funnel de ventas o marketing
- **Infografías** — resúmenes visuales

### 4. Editar
- Cambia iconos desde la librería integrada
- Ajusta colores, fuentes y layout
- Añade o elimina bloques

### 5. Exportar
- **PNG / PDF** — gratis
- **SVG / PPT** — plan de pago
- **Link compartible** — cualquier plan

### Ejemplo de uso con IA
```
[En Claude / ChatGPT]
Resume este proceso en 5 pasos concisos para convertirlo en un diagrama:

[Tu contenido]
```
Luego pegas el resultado en Napkin y generas el visual en segundos.

### Plan gratuito
500 créditos/semana (~1 crédito por palabra seleccionada). Suficiente para uso regular.
PROMPT,
                'tool_name' => 'Napkin.ai',
                'difficulty' => 'beginner',
                'estimated_minutes' => 5,
                'use_case' => 'Presentaciones, posts de LinkedIn, documentación de procesos, propuestas de cliente, cualquier situación donde necesitas un visual profesional rápido sin abrir Figma.',
                'status' => 'published',
                'vote_score' => 0,
                'views_count' => 0,
                'saves_count' => 0,
                'version' => 1,
            ],
            [
                'profession_id' => 2, // Desarrollo
                'user_id' => 1,
                'title' => 'Elimina tokens desperdiciados en Claude Code con Token Optimizer',
                'slug' => 'optimizar-tokens-claude-code-token-optimizer',
                'description' => 'Token Optimizer es un plugin para Claude Code que detecta y elimina "ghost tokens" — contexto desperdiciado en outputs verbosos, configs duplicadas y prompts inflados. Hace checkpoints antes de la compactación automática para no perder decisiones clave. Ahorro estimado de hasta 75% en uso de contexto en sesiones largas.',
                'prompt_content' => <<<'PROMPT'
## Workflow: Token Optimizer en Claude Code

### 1. Añadir el marketplace e instalar
```bash
claude plugin marketplace add alexgreensh/token-optimizer
claude plugin install token-optimizer@alexgreensh-token-optimizer
```

### 2. Auditoría rápida de tu sesión
Escribe en Claude Code:
```
/token-optimizer
```
Lanza una auditoría interactiva que puntúa la salud de tu contexto en 7 señales.

### 3. Comandos CLI para análisis específico
```bash
# Health check rápido con puntuación de calidad
python3 measure.py quick

# Guía personalizada de optimización
python3 measure.py coach

# Auditar tu MEMORY.md
python3 measure.py memory-review
```

### 4. Dashboard en tiempo real (opcional)
```bash
python3 measure.py setup-daemon
# Accede en: http://localhost:24842/token-optimizer
```

### ¿Qué optimiza exactamente?

**Waste de runtime:**
- Outputs de comandos demasiado verbosos
- Lecturas de archivos completos cuando solo necesitas el diff
- Prompts de sistema duplicados

**Waste estructural:**
- CLAUDE.md / MEMORY.md inflados con info obsoleta
- Skills no utilizados cargados en contexto
- Configs redundantes

### Funcionalidades clave
- **Delta-mode reads** — lee solo los cambios, no el archivo entero
- **Structure mapping** — indexa archivos grandes sin cargarlos
- **Pre-compaction checkpoints** — guarda el estado antes de que Claude compacte automáticamente
- **16 manejadores CLI** para reducción de waste en tiempo real

### Cuándo más ayuda
- Sesiones de +2 horas en proyectos grandes
- Codebases con muchos archivos y dependencias
- Cuando Claude empieza a "olvidar" contexto de decisiones anteriores
PROMPT,
                'tool_name' => 'Claude Code',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Desarrolladores que usan Claude Code intensivamente y quieren reducir costes de API, evitar compactaciones sorpresa y mantener el contexto de sus sesiones largas.',
                'status' => 'published',
                'vote_score' => 0,
                'views_count' => 0,
                'saves_count' => 0,
                'version' => 1,
            ],
        ];

        foreach ($skills as $data) {
            Skill::firstOrCreate(['slug' => $data['slug']], $data);
            echo 'Created: ' . $data['title'] . PHP_EOL;
        }
    }
}
