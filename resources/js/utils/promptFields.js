// Huecos de un prompt: el texto entre corchetes que el usuario debe cambiar
// por sus datos, como [actividad], [año] o [normal / pymes].
//
// Muchas fichas antiguas los escriben en mayúsculas ([DESCRIBE TU PRODUCTO],
// [NÚMERO]): también son huecos. No lo son:
// - las marcas para la IA, una palabra en mayúsculas tras «con»
//   («marca con [REVISAR]»): deben llegarle tal cual;
// - lo que no lleva letras ([...], [1-5]): son plantillas de la respuesta;
// - los enlaces de Markdown ([texto](url)).

const HOLE = /\[([^\]\n]{2,160})\](?!\()/g
const HAS_LETTER = /[a-záéíóúüñ]/i
const MARKER = /^[A-ZÁÉÍÓÚÜÑ_]+$/
const BEFORE_MARKER = /\bcon\s*$/i

// Etiqueta tomada de la línea: «- Régimen de IVA: [general / …]» → «Régimen de IVA»
const LINE_LABEL = /(?:^|\n)\s*(?:[-*•]\s*)?([^\n:[\]]{2,60}):\s*$/

function isHole(prompt, index, key) {
    if (!HAS_LETTER.test(key)) return false
    return !(MARKER.test(key) && BEFORE_MARKER.test(prompt.slice(Math.max(0, index - 12), index)))
}

function sentenceCase(text) {
    const plain = text === text.toUpperCase() ? text.toLowerCase().replaceAll('_', ' ') : text
    return plain.charAt(0).toUpperCase() + plain.slice(1)
}

function labelFor(prompt, index, inner) {
    const before = prompt.slice(Math.max(0, prompt.lastIndexOf('\n', index - 1)), index)
    const fromLine = before.match(LINE_LABEL)
    return sentenceCase(fromLine ? fromLine[1].trim() : inner.split(/[;:]/)[0].trim())
}

function optionsFor(inner) {
    let main = inner.split(';')[0]
    if (!main.includes(' / ')) return []
    // «[fondo: azul / gris]»: lo que va antes de los dos puntos es la
    // etiqueta, no parte de la primera opción.
    const colon = main.indexOf(':')
    if (colon > 0 && colon < main.indexOf(' / ') && colon <= 40) main = main.slice(colon + 1)
    const options = main.split(' / ').map(o => o.trim()).filter(Boolean)
    return options.length > 1 && options.every(o => o.length <= 60) ? options : []
}

/**
 * Lista de huecos, sin repetir: [{ key, label, hint, options, long }].
 * `key` es el texto exacto entre corchetes; dos huecos iguales comparten valor.
 */
export function promptFields(prompt) {
    const fields = []
    const seen = new Set()
    for (const m of (prompt ?? '').matchAll(HOLE)) {
        const key = m[1]
        if (seen.has(key) || !isHole(prompt, m.index, key)) continue
        seen.add(key)
        const options = optionsFor(key)
        fields.push({
            key,
            label: labelFor(prompt, m.index, key),
            hint: options.length ? 'Elige o escribe el tuyo' : sentenceCase(key),
            options,
            long: /\b(pega|adjunt)/i.test(key),
        })
    }
    return fields
}

/** El prompt con los huecos rellenados; los que siguen vacíos se quedan como están. */
export function fillPrompt(prompt, values) {
    return (prompt ?? '').replace(HOLE, (whole, key, index) => {
        const value = isHole(prompt, index, key) ? values[key]?.trim() : ''
        return value || whole
    })
}

/**
 * El prompt troceado para pintarlo: [{ text }] y [{ key, text, filled }].
 * Lo que no es un hueco (marcas, plantillas) queda como texto.
 */
export function promptSegments(prompt, values) {
    const text = prompt ?? ''
    const segments = []
    let last = 0
    for (const m of text.matchAll(HOLE)) {
        const key = m[1]
        if (!isHole(text, m.index, key)) continue
        if (m.index > last) segments.push({ text: text.slice(last, m.index) })
        const value = values[key]?.trim()
        segments.push({ key, text: value || m[0], filled: Boolean(value) })
        last = m.index + m[0].length
    }
    if (last < text.length) segments.push({ text: text.slice(last) })
    return segments
}
