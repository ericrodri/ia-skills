<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class HumanizerSkillSeeder extends Seeder
{
    public function run(): void
    {
        Skill::firstOrCreate(
            ['slug' => 'eliminar-patrones-escritura-ia-humanizer'],
            [
                'profession_id' => 1, // Marketing
                'user_id' => 1,
                'title' => 'Elimina los patrones de escritura IA de cualquier texto con Humanizer',
                'slug' => 'eliminar-patrones-escritura-ia-humanizer',
                'description' => 'El skill Humanizer detecta y elimina los 29 patrones que delatan que un texto fue escrito por IA — inflado de importancia, lenguaje publicitario, listas con emojis, frases de relleno, eufemismos de chatbot — y reescribe el texto con voz humana real. Basado en la guía oficial de Wikipedia sobre señales de escritura IA.',
                'prompt_content' => <<<'PROMPT'
## Workflow: Humanizer en Claude Code

### 1. Instalar el skill
```bash
mkdir -p ~/.claude/skills
git clone https://github.com/blader/humanizer.git ~/.claude/skills/humanizer
```

### 2. Usarlo en Claude Code
Escribe `/humanizer` seguido del texto que quieres humanizar:

```
/humanizer

[Pega aquí tu texto generado por IA]
```

### 3. Con calibración de voz (opcional)
Para que suene como TÚ, no como "un humano genérico":

```
/humanizer

Aquí tienes una muestra de mi forma de escribir para calibrar el tono:
[Pega 2-3 párrafos tuyos]

---
Texto a humanizar:
[Tu texto con IA]
```

### ¿Qué patrones elimina?
Los 29 patrones que Wikipedia documenta como señales de escritura IA:

**Lenguaje inflado:** "sirve como testimonio", "momento crucial", "paisaje en evolución", "vibrant", "groundbreaking"

**Frases de chatbot:** "¡Gran pregunta!", "Espero que esto ayude", "¿Le gustaría que expandiera...?"

**Estructuras artificiales:** listas de tres elementos, encabezados en Title Case, negritas excesivas, emojis decorativos, guiones em (—) en exceso

**Hedging y relleno:** "podría potencialmente argumentarse", "en el evento de que", "es importante destacar que"

**Conclusiones vacías:** "el futuro es brillante", "tiempos emocionantes por venir"

### Antes y después

**Antes (IA):**
> La estrategia de contenido sirve como un pilar fundamental en el paisaje digital actual, subrayando la importancia de alinearse con las tendencias emergentes y fomentando una conexión profunda con la audiencia.

**Después (Humanizer):**
> Una buena estrategia de contenido significa saber qué publicar, cuándo y para quién. Nada más.

### Referencia
Basado en [Wikipedia: Signs of AI writing](https://en.wikipedia.org/wiki/Wikipedia:Signs_of_AI_writing) — mantenido por WikiProject AI Cleanup.
PROMPT,
                'tool_name' => 'Claude Code',
                'difficulty' => 'beginner',
                'estimated_minutes' => 10,
                'use_case' => 'Posts de blog, emails, copy de producto, informes, cualquier texto generado con IA que necesita sonar humano antes de publicarse.',
                'status' => 'published',
                'vote_score' => 0,
                'views_count' => 0,
                'saves_count' => 0,
                'version' => 1,
            ]
        );

        echo 'Created: Humanizer skill' . PHP_EOL;
    }
}
