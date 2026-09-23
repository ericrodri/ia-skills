import { createInterface } from 'node:readline'
import { getSkill, installSkill, searchSkills } from './api.mjs'

/**
 * Servidor MCP por stdio (JSON-RPC 2.0, un mensaje por línea).
 *
 * Implementa lo justo para exponer tres herramientas a Claude Code u otro
 * cliente MCP: buscar skills, leer una y instalarla. Sin SDK para no arrastrar
 * dependencias en algo que es un puñado de métodos.
 */
const SERVER_INFO = { name: 'ia-skills', version: '0.1.0' }
const DEFAULT_PROTOCOL = '2025-06-18'

const TOOLS = [
    {
        name: 'search_skills',
        description: 'Busca prompts y skills de IA en español en el catálogo de ia-skills.com, ordenados por votos de la comunidad. Úsala cuando el usuario quiera un prompt o skill para una tarea profesional (marketing, desarrollo, legal, ventas, RRHH, finanzas...).',
        inputSchema: {
            type: 'object',
            properties: {
                query: { type: 'string', description: 'Qué se busca, en español. Ej: "revisar contratos", "cold email B2B".' },
                profession: {
                    type: 'string',
                    description: 'Slug de profesión para acotar.',
                    enum: ['marketing', 'desarrollo', 'diseno', 'ventas', 'product-management', 'rrhh', 'finanzas', 'legal', 'customer-support', 'freelancers'],
                },
                type: { type: 'string', enum: ['prompt', 'claude_skill', 'claude_plugin'] },
                limit: { type: 'integer', minimum: 1, maximum: 20, default: 8 },
            },
            required: ['query'],
        },
    },
    {
        name: 'get_skill',
        description: 'Devuelve el prompt completo de una skill de ia-skills.com a partir de su slug (obtenido con search_skills).',
        inputSchema: {
            type: 'object',
            properties: { slug: { type: 'string' } },
            required: ['slug'],
        },
    },
    {
        name: 'install_skill',
        description: 'Instala una skill de ia-skills.com como Skill de Claude Code (escribe su SKILL.md en ~/.claude/skills o en .claude/skills del proyecto). Pide confirmación al usuario antes de usarla.',
        inputSchema: {
            type: 'object',
            properties: {
                slug: { type: 'string' },
                scope: { type: 'string', enum: ['user', 'project'], default: 'user', description: 'user = todos tus proyectos; project = solo el directorio actual.' },
                force: { type: 'boolean', default: false, description: 'Sobrescribir si ya existe.' },
            },
            required: ['slug'],
        },
    },
]

async function callTool(name, args = {}) {
    switch (name) {
        case 'search_skills': {
            const { skills, total } = await searchSkills({ ...args, limit: args.limit ?? 8 })
            if (!skills.length) return `Sin resultados para «${args.query}».`
            const lines = skills.map((s, i) =>
                `${i + 1}. ${s.title} (slug: ${s.slug}, ${s.profession}, ${s.votes} votos)\n   ${s.description}\n   ${s.url}`)
            return `${total} resultados. Los ${skills.length} más relevantes:\n\n${lines.join('\n\n')}`
        }
        case 'get_skill': {
            const s = await getSkill(args.slug)
            return [
                `# ${s.title}`,
                s.description,
                s.use_case ? `Cuándo usarlo: ${s.use_case}` : null,
                `\n## Prompt\n\n${s.prompt}`,
                `\nFuente: ${s.url}`,
            ].filter(Boolean).join('\n')
        }
        case 'install_skill': {
            const { name: skillName, path } = await installSkill(args.slug, { scope: args.scope, force: args.force })
            return `Instalada «${skillName}» en ${path}. Actívala con /${skillName} o deja que Claude la use cuando encaje.`
        }
        default:
            throw Object.assign(new Error(`Herramienta desconocida: ${name}`), { code: -32602 })
    }
}

function send(message) {
    process.stdout.write(JSON.stringify({ jsonrpc: '2.0', ...message }) + '\n')
}

async function handle(msg) {
    const { id, method, params } = msg
    const isNotification = id === undefined || id === null

    try {
        let result
        switch (method) {
            case 'initialize':
                result = {
                    protocolVersion: params?.protocolVersion ?? DEFAULT_PROTOCOL,
                    capabilities: { tools: {} },
                    serverInfo: SERVER_INFO,
                }
                break
            case 'ping':
                result = {}
                break
            case 'tools/list':
                result = { tools: TOOLS }
                break
            case 'tools/call':
                try {
                    const text = await callTool(params?.name, params?.arguments)
                    result = { content: [{ type: 'text', text }] }
                } catch (error) {
                    if (error.code === -32602) throw error
                    // Un fallo de la herramienta (404, red...) se devuelve como
                    // resultado con isError para que el modelo pueda reaccionar.
                    result = { content: [{ type: 'text', text: `Error: ${error.message}` }], isError: true }
                }
                break
            default:
                if (isNotification) return
                throw Object.assign(new Error(`Método no soportado: ${method}`), { code: -32601 })
        }
        if (!isNotification) send({ id, result })
    } catch (error) {
        if (!isNotification) send({ id, error: { code: error.code ?? -32603, message: error.message } })
    }
}

export function startMcpServer() {
    const rl = createInterface({ input: process.stdin })

    rl.on('line', (line) => {
        if (!line.trim()) return
        let msg
        try {
            msg = JSON.parse(line)
        } catch {
            send({ id: null, error: { code: -32700, message: 'JSON inválido' } })
            return
        }
        handle(msg)
    })
}
