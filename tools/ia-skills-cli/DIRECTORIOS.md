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

## Directorio de conectores de Claude (Anthropic)

Es el directorio que más importa: ahí buscan conectores quienes usan Claude.
Ficha preparada el 2026-11-15 con los requisitos de
https://claude.com/docs/connectors/building/submission y
https://claude.com/docs/connectors/building/review-criteria.

**Quién y dónde:** https://claude.ai/directory/manage → «Submit new» → «MCP
connector». Hace falta un plan de pago. En Pro, Max o Ultra lo envía tu propia
cuenta. En Team o Enterprise solo puede enviarlo un propietario (Owner), y la
ficha queda a nombre de esa organización.

**Antes de enviarlo:** comprueba que la política de privacidad publicada ya
incluye el apartado «Estadísticas del conector» (actualizada el 2026-11-15).

### 1. Connection

- **Server URL:** `https://ia-skills.com/api/mcp`
- **URL type:** una sola dirección para todos (ni «Multiple URLs» ni «URL
  pattern»: esas opciones solo se publican con la etiqueta Verified).

### 2. Tools

Se sincronizan solas. Las dos públicas (`search_skills`, `get_skill`) tienen
título y `readOnlyHint: true`, así que no deberían salir avisos.

### 3. Listing

- **Server name** (máx. 100): `ia-skills`
- **One-liner** (máx. 200):

  > 7,000+ ready-to-use AI prompts and skills in Spanish, organized by profession: marketing, legal, sales, HR, finance, software development and more.

- **Description** (máx. 2.000):

  > ia-skills (ia-skills.com) is a free, community-curated library of more than 7,000 AI prompts and skills written in Spanish for professionals, organized by profession and task: marketing, legal, sales, HR, finance, customer support, product, design, software development and freelancers. It also covers everyday tasks such as editing photos with ChatGPT or Gemini, writing letters or planning a trip.
  >
  > With this connector, Claude can find the right prompt for what you're working on and apply it directly in the conversation, without copying and pasting:
  >
  > - search_skills: searches the catalog by task and, optionally, by profession, ordered by popularity.
  > - get_skill: returns the full prompt of a skill, including its fill-in fields in [brackets], its profession, the recommended tool and a link to its page.
  >
  > Example requests:
  > - "Find me a prompt in ia-skills to review a services contract and use it with this one."
  > - "Busca en ia-skills un prompt para preparar una entrevista de trabajo."
  > - "Which ia-skills prompts are there for cold emailing B2B clients?"
  >
  > The connector is read-only: it only returns published content from the public catalog and cannot create, change or delete anything. No account or sign-in is needed. All content is in Spanish.

- **Categories** (1 a 5, de las que ofrezca el formulario): *Productivity*,
  *Education*, *Business*, *Writing* (las que existan con un nombre parecido).
- **Documentation URL:** `https://ia-skills.com/guias/conectar-ia-skills-a-claude`
- **Privacy policy URL:** `https://ia-skills.com/privacidad`
- **Support contact:** `hola@ia-skills.com`
- **Icon:** `public/icon-512.png` (512×512).
- **URL slug:** `ia-skills`. **No se puede cambiar** una vez publicado.

### 4. Use cases

- **Primary use cases:**

  > Professionals who use AI at work find a proven prompt for their task (contracts, proposals, campaigns, job descriptions, financial analysis, code reviews, photo editing…) and have Claude apply it to their own material in the same conversation.

- **What users need before connecting:** `Nothing. No account, plan or setup is required.`
- **Reads, writes or both:** `Reads only.`

### 5. Company

- **Company name:** `ia-skills`
- **Website:** `https://ia-skills.com`
- **Primary contact for review updates:** `hola@ia-skills.com`

### 6. Authentication

- **Authentication method:** `None` (sin autenticación).

Se envía la versión pública a propósito:
- No hace falta cuenta de prueba, así que la revisión es más sencilla.
- Cualquiera puede usarlo sin registrarse, que es lo que buscamos: que las IA
  consuman el catálogo.

Quien quiera sus skills privadas sigue teniendo `https://ia-skills.com/api/mcp/cuenta`
como conector personalizado, con OAuth. Si algún día se quiere todo en una
sola ficha, habría que implementar autenticación perezosa (*lazy auth*): el
catálogo abierto y `my_skills` pidiendo iniciar sesión con un 401. Claude
ignora el `WWW-Authenticate` si la respuesta es un 200.

### 7. Data handling (respuestas reales)

- **Whose API:** our own first-party API (ia-skills.com).
- **Personal health data:** no.
- **Sponsored content:** no. El conector devuelve el prompt y el enlace a la
  ficha; los enlaces de afiliado solo están en la web.
- Si preguntan qué se guarda:

  > Aggregated daily counts of connections, searches and skills read, including the search text, the slug of the public skill read, the client name taken from the User-Agent and whether the request was signed in. No IP address or user ID is stored in these counts; they are kept for 25 months. The web server also keeps standard access logs (IP, URL, date) for security. No data is shared with third parties.

### 8. Test & launch

Antes de enviarlo, prueba las dos herramientas como conector personalizado en
Claude (Personalizar → Conectores → Añadir conector personalizado, con la
dirección de arriba y sin autenticación). Pide, por ejemplo: «Busca en
ia-skills un prompt para revisar un contrato y enséñamelo». No pongas
credenciales en el portal.

### 9. Compliance

Son 7 casillas obligatorias. Léelas y márcalas tú: son compromisos de
ia-skills con Anthropic (normas del directorio, API propia, sin transacciones
financieras, sin generar imágenes ni vídeo con IA, sin inyección de
instrucciones, sin recoger conversaciones y documentación pública).

### Después

- **Revisión:** un sistema automático revisa la ficha y, si cumple, sale como
  **Community**. Anthropic puede llevarla después a la revisión **Verified**.
- **Plazos:** no los publican.
- **Estado:** se sigue en el mismo portal.
- **Si se atasca:** mcp-review@anthropic.com.

## Datos comunes

| Campo | Valor |
|---|---|
| Nombre | ia-skills |
| Paquete npm | `ia-skills` |
| Repositorio | https://github.com/ericrodri/ia-skills (carpeta `tools/ia-skills-cli`) |
| Web | https://ia-skills.com/mcp |
| Licencia | MIT |
| Transporte | stdio (local) y Streamable HTTP (remoto, desde 0.1.3) |
| URL remota | https://ia-skills.com/api/mcp (sin clave; `/api/mcp/cuenta` con OAuth para las skills propias) |
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
