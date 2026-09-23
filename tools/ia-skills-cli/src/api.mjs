import { mkdir, writeFile, access } from 'node:fs/promises'
import { homedir } from 'node:os'
import { join } from 'node:path'

/**
 * Cliente mínimo de la API pública de ia-skills (/api/v1) y de los SKILL.md
 * de cada ficha (/skills/{slug}/skill.md). Sin dependencias: fetch nativo.
 */
export const BASE_URL = (process.env.IA_SKILLS_URL || 'https://ia-skills.com').replace(/\/+$/, '')

async function request(path, { json = true } = {}) {
    const res = await fetch(BASE_URL + path, {
        headers: { Accept: json ? 'application/json' : 'text/markdown', 'User-Agent': 'ia-skills-cli/0.1' },
    })

    if (res.status === 404) throw new Error('No encontrada. Revisa el slug de la skill.')
    if (res.status === 429) throw new Error('Demasiadas peticiones seguidas. Espera un minuto.')
    if (!res.ok) throw new Error(`La API respondió ${res.status}.`)

    return json ? res.json() : res.text()
}

export async function searchSkills({ query, profession, type, limit = 10 } = {}) {
    const params = new URLSearchParams()
    if (query) params.set('q', query)
    if (profession) params.set('profession', profession)
    if (type) params.set('type', type)
    params.set('limit', String(Math.min(Math.max(Number(limit) || 10, 1), 50)))

    const { data, meta } = await request(`/api/v1/skills?${params}`)
    return { skills: data, total: meta.total }
}

export async function getSkill(slug) {
    const { data } = await request(`/api/v1/skills/${encodeURIComponent(slug)}`)
    return data
}

export async function fetchSkillMarkdown(slug) {
    return request(`/skills/${encodeURIComponent(slug)}/skill.md`, { json: false })
}

/** Lee `name:` del frontmatter de un SKILL.md. */
export function skillName(markdown) {
    const match = markdown.match(/^---\n[\s\S]*?^name:\s*(.+)$/m)
    return match ? match[1].trim().replace(/^["']|["']$/g, '') : null
}

/**
 * Descarga el SKILL.md y lo escribe en <dir>/<name>/SKILL.md.
 * scope 'user' → ~/.claude/skills · 'project' → ./.claude/skills
 */
export async function installSkill(slug, { scope = 'user', dir, force = false } = {}) {
    const markdown = await fetchSkillMarkdown(slug)
    const name = skillName(markdown)

    if (!name || !/^[a-z0-9-]{1,64}$/.test(name)) {
        throw new Error('El SKILL.md recibido no tiene un nombre válido.')
    }

    const root = dir ?? (scope === 'project' ? join(process.cwd(), '.claude', 'skills') : join(homedir(), '.claude', 'skills'))
    const target = join(root, name)
    const file = join(target, 'SKILL.md')

    if (!force) {
        const exists = await access(file).then(() => true, () => false)
        if (exists) throw new Error(`Ya existe ${file}. Usa --force para sobrescribirlo.`)
    }

    await mkdir(target, { recursive: true })
    await writeFile(file, markdown, 'utf8')

    return { name, path: file }
}
