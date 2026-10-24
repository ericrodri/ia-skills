# Envío a directorios de servidores MCP

Textos listos para pegar al dar de alta el servidor en directorios. Este fichero
no se publica en npm (`files` en package.json solo incluye `bin`, `src` y el
README).

Los procesos de envío de cada directorio cambian a menudo: comprueba el actual
antes de seguir estas notas.

## Primero: el registro oficial

Se publica solo desde GitHub Actions al etiquetar una versión (`cli-v*`), con
el `server.json` de esta carpeta. Varios directorios se alimentan de ese
registro, así que **antes de enviar nada a mano, busca si ya apareces**.

- Nombre en el registro: `io.github.ericrodri/ia-skills`
- Ficha web: https://ia-skills.com/mcp

## Datos comunes

| Campo | Valor |
|---|---|
| Nombre | ia-skills |
| Paquete npm | `ia-skills` |
| Repositorio | https://github.com/ericrodri/ia-skills (carpeta `tools/ia-skills-cli`) |
| Web | https://ia-skills.com/mcp |
| Licencia | MIT |
| Transporte | stdio (local) |
| Lenguaje | JavaScript (Node.js 18+, sin dependencias) |
| Requiere clave | No |

**Instalación en Claude Code**

```bash
claude mcp add ia-skills -- npx -y ia-skills mcp
```

**Configuración para otros clientes (JSON)**

```json
{
  "mcpServers": {
    "ia-skills": {
      "command": "npx",
      "args": ["-y", "ia-skills", "mcp"]
    }
  }
}
```

**Herramientas**

- `search_skills`: busca en el catálogo por texto, profesión y tipo.
- `get_skill`: devuelve el prompt completo de una skill.
- `install_skill`: la instala como skill de Claude Code en `~/.claude/skills` o en el proyecto.

**Etiquetas sugeridas:** prompts, skills, claude-code, spanish, productivity, professional, catalog

## Descripciones

La mayoría de directorios se navegan en inglés, así que la descripción va en
inglés diciendo claramente que el contenido es en español: quien lo instale
tiene que saberlo antes.

**Corta (EN, ~100 caracteres)**

> Search and install thousands of Spanish-language AI prompts and skills for professionals in Claude Code.

**Larga (EN)**

> ia-skills is a catalog of Spanish-language AI prompts and Claude Code skills, organized by profession: marketing, software development, legal, sales, HR, finance, design and more.
>
> This MCP server lets Claude search the catalog, read a full prompt, and install it as a Claude Code skill — all from inside the conversation. Claude asks for confirmation before writing any file.
>
> No API key or account required. Search queries go to the public ia-skills.com API; your conversation and files are never sent.

**Corta (ES)**

> Busca e instala en Claude Code miles de prompts y skills de IA en español, organizados por profesión.

**Larga (ES)**

> ia-skills es un catálogo de prompts y skills de IA en español, organizado por profesión: marketing, desarrollo, legal, ventas, RRHH, finanzas, diseño y más.
>
> Este servidor MCP deja que Claude busque en el catálogo, lea un prompt completo y lo instale como skill de Claude Code sin salir de la conversación. Antes de escribir ningún archivo, Claude pide confirmación.
>
> No necesita clave ni cuenta. Las búsquedas van a la API pública de ia-skills.com; la conversación y los archivos nunca se envían.

## Notas por directorio

- **awesome-mcp-servers** (listas en GitHub): se entra con un pull request
  añadiendo una línea en la categoría que encaje (productividad o
  conocimiento). Respeta la leyenda de iconos de su README: lenguaje JS/TS y
  ejecución local.
- **Smithery, Glama, mcp.so, PulseMCP**: algunos indexan el registro oficial o
  GitHub automáticamente. Busca el servidor antes de enviarlo; si no aparece,
  usa su formulario de alta con los datos de arriba.

Cuando publiques en alguno, apúntalo aquí con la fecha, para no duplicar envíos.
