#!/usr/bin/env node
import { parseArgs } from 'node:util'
import { BASE_URL, getSkill, installSkill, searchSkills } from '../src/api.mjs'
import { startMcpServer } from '../src/mcp.mjs'

const HELP = `ia-skills — prompts y skills de IA de ${BASE_URL}

Uso:
  ia-skills search <texto> [--profession marketing] [--limit 10]
  ia-skills show <slug>
  ia-skills install <slug> [--project] [--dir <ruta>] [--force]
  ia-skills mcp                     Arranca el servidor MCP (stdio)

Instalar como servidor MCP en Claude Code:
  claude mcp add ia-skills -- npx -y ia-skills mcp

Variables de entorno:
  IA_SKILLS_URL   Otra instancia (por defecto https://ia-skills.com)
`

async function main() {
    const [command, ...rest] = process.argv.slice(2)

    const { values, positionals } = parseArgs({
        args: rest,
        allowPositionals: true,
        options: {
            profession: { type: 'string' },
            type: { type: 'string' },
            limit: { type: 'string' },
            project: { type: 'boolean', default: false },
            dir: { type: 'string' },
            force: { type: 'boolean', default: false },
        },
    })

    switch (command) {
        case 'search': {
            const query = positionals.join(' ')
            if (!query) return fail('Indica qué buscar: ia-skills search "revisar contratos"')
            const { skills, total } = await searchSkills({ query, profession: values.profession, type: values.type, limit: values.limit })
            if (!skills.length) return console.log(`Sin resultados para «${query}».`)
            console.log(`${total} resultados:\n`)
            for (const s of skills) {
                console.log(`  ${s.title}`)
                console.log(`  \x1b[2m${s.slug} · ${s.profession} · ${s.votes} votos\x1b[0m\n`)
            }
            console.log('Instala una con: ia-skills install <slug>')
            return
        }
        case 'show': {
            const [slug] = positionals
            if (!slug) return fail('Indica el slug: ia-skills show <slug>')
            const s = await getSkill(slug)
            console.log(`# ${s.title}\n\n${s.description}\n`)
            if (s.use_case) console.log(`Cuándo usarlo: ${s.use_case}\n`)
            console.log(s.prompt)
            console.log(`\n${s.url}`)
            return
        }
        case 'install': {
            const [slug] = positionals
            if (!slug) return fail('Indica el slug: ia-skills install <slug>')
            const { name, path } = await installSkill(slug, {
                scope: values.project ? 'project' : 'user',
                dir: values.dir,
                force: values.force,
            })
            console.log(`✓ Instalada en ${path}`)
            console.log(`  Úsala en Claude Code con /${name}`)
            return
        }
        case 'mcp':
            return startMcpServer()
        case undefined:
        case 'help':
        case '--help':
        case '-h':
            return console.log(HELP)
        default:
            return fail(`Comando desconocido: ${command}\n\n${HELP}`)
    }
}

function fail(message) {
    console.error(message)
    process.exitCode = 1
}

main().catch((error) => fail(`Error: ${error.message}`))
