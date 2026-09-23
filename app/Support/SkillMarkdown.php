<?php

namespace App\Support;

use App\Models\Skill;
use Illuminate\Support\Str;

/**
 * Convierte una ficha del catálogo en un SKILL.md instalable en Claude Code.
 *
 * El formato es el de Agent Skills: frontmatter YAML con `name` (minúsculas y
 * guiones, máximo 64 caracteres) y `description` (máximo 1.024), seguido de
 * las instrucciones en Markdown. La description es lo que Claude lee para
 * decidir cuándo activar el skill, así que combina qué hace y cuándo usarlo.
 */
class SkillMarkdown
{
    public const NAME_MAX = 64;

    public const DESCRIPTION_MAX = 1024;

    /**
     * Nombre del skill y de su carpeta en ~/.claude/skills/. Deriva del slug,
     * recortado por el último guion para no partir palabras.
     */
    public static function name(Skill $skill): string
    {
        $slug = Str::slug($skill->slug);

        if (strlen($slug) <= self::NAME_MAX) {
            return $slug;
        }

        $cut = substr($slug, 0, self::NAME_MAX);
        $lastHyphen = strrpos($cut, '-');

        return $lastHyphen ? substr($cut, 0, $lastHyphen) : $cut;
    }

    public static function render(Skill $skill): string
    {
        $description = Seo::clean($skill->description);

        if ($skill->use_case) {
            $description .= ' Úsalo cuando: '.Seo::clean($skill->use_case);
        }

        $description = Str::limit($description, self::DESCRIPTION_MAX - 1, '…', preserveWords: true);

        $lines = [
            '---',
            'name: '.self::name($skill),
            'description: '.self::yamlString($description),
            '---',
            '',
            '# '.Seo::clean($skill->title),
            '',
            Seo::clean($skill->description),
            '',
        ];

        if ($skill->use_case) {
            $lines[] = '## Cuándo usarlo';
            $lines[] = '';
            $lines[] = Seo::clean($skill->use_case);
            $lines[] = '';
        }

        $lines[] = '## Instrucciones';
        $lines[] = '';

        if (str_contains($skill->prompt_content, '[')) {
            $lines[] = 'Sigue el prompt de abajo. Los campos entre [corchetes] son variables: '
                .'si el usuario no te ha dado ese dato, pídeselo antes de empezar en lugar de inventarlo.';
            $lines[] = '';
        }

        $lines[] = trim(str_replace("\r\n", "\n", $skill->prompt_content));
        $lines[] = '';
        $lines[] = '---';
        $lines[] = '';
        $lines[] = sprintf(
            'Fuente: [%s](%s) · versión %d · ia-skills.com',
            Seo::clean($skill->title),
            route('skills.show', ['skill' => $skill->slug]),
            $skill->version ?? 1,
        );
        $lines[] = '';

        return implode("\n", $lines);
    }

    /**
     * Comando de terminal que instala el skill en el directorio personal.
     */
    public static function installCommand(Skill $skill): string
    {
        $dir = '~/.claude/skills/'.self::name($skill);

        return sprintf(
            'mkdir -p %s && curl -fsSL %s -o %s/SKILL.md',
            $dir,
            route('skills.markdown', ['skill' => $skill->slug]),
            $dir,
        );
    }

    /**
     * Instrucción para pegar en Claude Code y que sea él quien instale.
     *
     * Es la opción principal en la web: quien ya usa Claude Code prefiere
     * pedírselo a pegar una ristra de `mkdir && curl`. Claude descarga cada
     * SKILL.md y lo guarda con el nombre de su frontmatter.
     *
     * @param  iterable<Skill>  $skills
     */
    public static function installPrompt(iterable $skills): string
    {
        $skills = collect($skills);
        $urls = $skills->map(fn (Skill $s) => '- '.route('skills.markdown', ['skill' => $s->slug]))->implode("\n");
        $what = $skills->count() === 1 ? 'esta skill' : "estas {$skills->count()} skills";

        // "con curl": WebFetch devuelve el contenido procesado por un modelo y
        // guardaría un resumen en lugar del SKILL.md literal.
        return "Instala {$what} de ia-skills.com en mi Claude Code. Para cada URL, descarga el archivo con curl y guárdalo "
            ."tal cual en ~/.claude/skills/<name>/SKILL.md, donde <name> es el campo `name` de su frontmatter. "
            ."No modifiques el contenido. Si alguna ya existe, pregúntame antes de sobrescribirla. "
            ."Al terminar, dime qué has instalado y cómo invocar cada una.\n\n{$urls}";
    }

    /**
     * Cadena YAML entre comillas dobles: la description viene de usuarios y
     * puede contener dos puntos, almohadillas o comillas que romperían un
     * escalar sin comillas.
     */
    private static function yamlString(string $value): string
    {
        return '"'.str_replace(['\\', '"'], ['\\\\', '\\"'], $value).'"';
    }
}
