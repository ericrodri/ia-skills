<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class NapkinSkillSeeder extends Seeder
{
    public function run(): void
    {
        Skill::firstOrCreate(
            ['slug' => 'napkin-runbook-por-repo-claude-code'],
            [
                'profession_id' => 2, // Desarrollo
                'user_id' => 1,
                'title' => 'Napkin: el runbook vivo por repo que Claude mantiene solo',
                'slug' => 'napkin-runbook-por-repo-claude-code',
                'description' => 'Napkin es un skill de Claude Code que mantiene automáticamente un runbook curado en .claude/napkin.md — no un log de sesión, sino una base de conocimiento viva con las reglas, gotchas y tácticas que realmente funcionan en cada repo. Claude lo lee al inicio de cada sesión, aplica lo que sabe y lo actualiza cuando aprende algo nuevo.',
                'prompt_content' => <<<'PROMPT'
## Workflow: Napkin en Claude Code

### 1. Instalar el skill
```bash
mkdir -p ~/.claude/skills
# Clona el repo del skill (Codex / tu fuente preferida)
git clone https://github.com/diegolamanno/napkin.git ~/.claude/skills/napkin
```

O crea el archivo manualmente en `~/.claude/skills/napkin/SKILL.md` con el contenido del skill.

### 2. Qué hace Napkin automáticamente

**Al inicio de cada sesión:**
- Lee `.claude/napkin.md` del repo actual
- Internaliza las reglas y las aplica en silencio (sin anunciarlo)
- Curates el runbook: re-prioriza, fusiona duplicados, elimina notas obsoletas

**Durante el trabajo:**
- Añade entradas nuevas cuando detecta algo reutilizable
- Gotchas del toolchain, directivas del usuario, tácticas que funcionan

**Qué NO incluye:**
- Logs cronológicos de sesión
- Postmortems sin acción concreta
- Notas de un solo uso

### 3. Estructura del runbook `.claude/napkin.md`

```markdown
# Napkin Runbook

## Curation Rules
- Re-prioritizar en cada lectura
- Solo notas recurrentes y de alto valor
- Máx. 10 items por categoría
- Cada item incluye fecha + "Do instead"

## Execution & Validation (Highest Priority)
1. **[2026-05-06] Regla corta**
   Do instead: acción concreta y repetible.

## Shell & Command Reliability
1. **[2026-05-06] `rg` falla con listas de paths expandidos**
   Do instead: ejecutar `rg` sobre directorios raíz o iterar con `while IFS= read -r`.

## Domain Behavior Guardrails
1. **[2026-05-06] Regla de dominio**
   Do instead: acción concreta.

## User Directives
1. **[2026-05-06] Directiva del usuario**
   Do instead: seguir exactamente esta preferencia.
```

### 4. Política de categorías y prioridad
- Organiza por categoría adaptada al repo (no fijas)
- Ordena dentro de cada categoría por importancia descendente
- Máximo 10 items por categoría — si se supera, elimina los de menor señal
- Preferir pocos items de alta señal sobre cobertura amplia

### Por qué es útil
Sin Napkin, Claude empieza cada sesión desde cero y repite los mismos errores.
Con Napkin, acumula conocimiento específico del repo — comandos que fallan,
preferencias del equipo, patrones que funcionan — y lo aplica desde el primer mensaje.

### Ejemplo de entrada
```markdown
1. **[2026-05-06] `php artisan tinker` no acepta variables con $ en --execute**
   Do instead: escribir el script en un archivo .php y ejecutarlo con `php artisan tinker < script.php`.
```
PROMPT,
                'tool_name' => 'Claude Code',
                'difficulty' => 'beginner',
                'estimated_minutes' => 10,
                'use_case' => 'Proyectos donde trabajas con Claude Code de forma recurrente y quieres que recuerde las reglas, gotchas y preferencias del repo sin repetirlas en cada sesión.',
                'status' => 'published',
                'vote_score' => 0,
                'views_count' => 0,
                'saves_count' => 0,
                'version' => 1,
            ]
        );

        echo 'Created: Napkin skill' . PHP_EOL;
    }
}
