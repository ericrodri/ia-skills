import { test } from 'node:test'
import assert from 'node:assert/strict'
import { spawn } from 'node:child_process'
import { fileURLToPath } from 'node:url'
import { skillName } from '../src/api.mjs'

const bin = fileURLToPath(new URL('../bin/ia-skills.mjs', import.meta.url))

test('skillName lee el name del frontmatter', () => {
    const md = '---\nname: revisor-de-contratos\ndescription: "Revisa: contratos"\n---\n\n# Título\n'
    assert.equal(skillName(md), 'revisor-de-contratos')
    assert.equal(skillName('# sin frontmatter'), null)
})

test('el servidor MCP responde a initialize y tools/list sin tocar la red', async () => {
    const child = spawn(process.execPath, [bin, 'mcp'], { stdio: ['pipe', 'pipe', 'inherit'] })
    const responses = []

    const done = new Promise((resolve) => {
        let buffer = ''
        child.stdout.on('data', (chunk) => {
            buffer += chunk
            let nl
            while ((nl = buffer.indexOf('\n')) >= 0) {
                responses.push(JSON.parse(buffer.slice(0, nl)))
                buffer = buffer.slice(nl + 1)
                if (responses.length === 3) resolve()
            }
        })
    })

    const send = (msg) => child.stdin.write(JSON.stringify({ jsonrpc: '2.0', ...msg }) + '\n')
    send({ id: 1, method: 'initialize', params: { protocolVersion: '2025-06-18', capabilities: {}, clientInfo: { name: 'test', version: '0' } } })
    send({ method: 'notifications/initialized' })
    send({ id: 2, method: 'tools/list' })
    send({ id: 3, method: 'metodo/inexistente' })

    await done
    child.kill()

    const [init, list, unknown] = responses
    assert.equal(init.id, 1)
    assert.equal(init.result.serverInfo.name, 'ia-skills')
    assert.deepEqual(list.result.tools.map((t) => t.name), ['search_skills', 'get_skill', 'install_skill'])
    assert.equal(unknown.error.code, -32601)
})
