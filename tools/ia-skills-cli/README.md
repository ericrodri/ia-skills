# ia-skills CLI y servidor MCP

Busca e instala las skills de [ia-skills.com](https://ia-skills.com) en Claude Code sin salir de la terminal, o deja que Claude las busque solo a través de MCP.

No tiene dependencias: solo necesita Node.js 18 o superior.

## CLI

```bash
npx ia-skills search "revisar contratos"
npx ia-skills show revisor-de-contratos-con-resumen-de-riesgos
npx ia-skills install revisor-de-contratos-con-resumen-de-riesgos
```

`install` descarga el `SKILL.md` de la ficha (`/skills/{slug}/skill.md`) y lo guarda en `~/.claude/skills/<nombre>/SKILL.md`. Con `--project` lo guarda en `.claude/skills/` del directorio actual, y con `--dir` en la ruta que indiques. Si el archivo ya existe no lo toca, salvo que pases `--force`.

## Servidor MCP

```bash
claude mcp add ia-skills -- npx -y ia-skills mcp
```

Expone tres herramientas:

| Herramienta     | Qué hace                                                      |
|-----------------|---------------------------------------------------------------|
| `search_skills` | Busca en el catálogo por texto, profesión y tipo              |
| `get_skill`     | Devuelve el prompt completo de una skill                      |
| `install_skill` | Escribe el `SKILL.md` en `~/.claude/skills` o en el proyecto  |

## API

Ambos usan la API pública de solo lectura, que no requiere clave:

- `GET /api/v1/skills?q=&profession=&type=&sort=top|new|saved&limit=`
- `GET /api/v1/skills/{slug}`
- `GET /api/v1/professions`

Para apuntar a otra instancia (por ejemplo, tu entorno local), usa `IA_SKILLS_URL=http://localhost:8001`.

## Publicación

El paquete todavía no está publicado en npm. Mientras tanto se puede usar en local:

```bash
cd tools/ia-skills-cli
npm link
ia-skills search "cold email"
```

Tests: `npm test` (usa el runner nativo de Node).
