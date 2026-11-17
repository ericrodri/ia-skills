// Qué se manda al pulsar «Copiar» o «Abrir en…».
//
// Las fichas recientes llevan, además del prompt, texto para quien lo usa: una
// nota «Uso:» al principio y secciones como «VERSIÓN EN INGLÉS», «VARIANTES»,
// «SI NO SALE BIEN» o «LÍMITES QUE DEBES CONOCER». El botón copiaba todo, así
// que ChatGPT recibía la orden dos veces (en español y en inglés) más los
// consejos; la gente acababa copiando a mano solo las instrucciones en español
// (mano_es era el bloque más copiado a mano en noviembre de 2026).
//
// Las fichas sin esas secciones se copian enteras, como siempre.

// Encabezado de sección: una línea en mayúsculas («PASO 1: DESCRIBE EL
// CAMBIO»), que puede acabar en un paréntesis en minúsculas («(en español)»).
const HEADER = /^(?=[^a-záéíóúüñ]*[A-ZÁÉÍÓÚÜÑ]{4})[A-ZÁÉÍÓÚÜÑ0-9 :,.\-\/()]+(\s*\([^)\n]*\))?$/

// Secciones para quien usa el prompt, no para la IA.
const ENGLISH = /EN INGLÉS/
const FOR_THE_USER = /^(VARIANTES|SI NO SALE BIEN|LÍMITES QUE DEBES CONOCER|TRUCOS QUE AYUDAN)\b/

// Encabezado que solo marca dónde empieza el prompt: sobra al pegarlo.
const MAIN_HEADER = /^(INSTRUCCIONES \(en español\)|PROMPT)$/

function sections(text) {
    const lines = text.split('\n')
    const parts = [{ header: null, lines: [] }]
    for (const line of lines) {
        const trimmed = line.trim()
        if (trimmed.length <= 90 && HEADER.test(trimmed)) parts.push({ header: trimmed, lines: [] })
        else parts[parts.length - 1].lines.push(line)
    }
    return parts
}

function join(lines) {
    return lines.join('\n').replace(/\n{3,}/g, '\n\n').trim()
}

/**
 * @param {string} prompt  El prompt ya rellenado.
 * @returns {{ main: string, english: string|null, full: string, split: boolean }}
 *   main: lo que copia el botón principal; english: la versión en inglés, si
 *   la hay; split: si main es distinto del prompt entero.
 */
export function promptParts(prompt) {
    const full = (prompt ?? '').trim()
    const parts = sections(full)
    const hasUsage = /^Uso:/.test(full)
    const hasExtras = parts.some(p => p.header && (ENGLISH.test(p.header) || FOR_THE_USER.test(p.header)))
    if (!hasUsage && !hasExtras) return { main: full, english: null, full, split: false }

    const kept = []
    let english = null
    parts.forEach((part, i) => {
        if (i === 0) {
            // Antes del primer encabezado: la nota «Uso:» (hasta la primera
            // línea en blanco) es para la persona; lo que siga, si hay, es prompt.
            let body = part.lines
            if (hasUsage) {
                const blank = body.findIndex(l => l.trim() === '')
                body = blank < 0 ? [] : body.slice(blank + 1)
            }
            kept.push(...body)
            return
        }
        if (ENGLISH.test(part.header)) {
            english ??= join(part.lines)
            return
        }
        if (FOR_THE_USER.test(part.header)) return
        if (!MAIN_HEADER.test(part.header)) kept.push('', part.header)
        kept.push(...part.lines)
    })

    const main = join(kept)
    // Si no queda nada que mandar (una ficha rara), mejor el prompt entero.
    if (main.length < 40) return { main: full, english, full, split: false }
    return { main, english: english || null, full, split: main !== full }
}
