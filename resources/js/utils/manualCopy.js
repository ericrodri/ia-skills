// Qué parte del prompt se copia a mano (seleccionar y Ctrl+C) en una ficha.
// Sirve para saber si la gente copia a mano porque solo quiere un bloque: si
// es así, conviene un botón «Copiar» por bloque. Ver App\Support\SkillActions.
//
// Las fichas recientes tienen secciones («INSTRUCCIONES (en español)»,
// «VERSIÓN EN INGLÉS», «VARIANTES», «SI NO SALE BIEN», «LÍMITES QUE DEBES
// CONOCER»). Lo que no cae en ninguna, o las fichas sin ellas, cuenta como trozo.

const BLOCKS = [
    [/INSTRUCCIONES \(en español\)/, 'mano_es'],
    [/VERSIÓN EN INGLÉS/, 'mano_en'],
    [/(^|\n)(VARIANTES|SI NO SALE BIEN)\n/, 'mano_variante'],
    [/(^|\n)LÍMITES QUE DEBES CONOCER\n/, 'mano_trozo'],
]

/**
 * @param {string} fullText  El texto del prompt tal como se ve en la página.
 * @param {string} selected  Lo que se ha copiado.
 * @returns {'mano_todo'|'mano_es'|'mano_en'|'mano_variante'|'mano_trozo'}
 */
export function manualCopyPart(fullText, selected) {
    const full = (fullText ?? '').trim()
    const copied = (selected ?? '').trim()
    if (full && copied.length >= full.length * 0.9) return 'mano_todo'

    const at = full.indexOf(copied.slice(0, 60))
    if (at < 0) return 'mano_trozo'

    // El bloque es el del último encabezado que aparece antes de lo copiado.
    let part = 'mano_trozo'
    let partAt = -1
    for (const [pattern, action] of BLOCKS) {
        const match = full.match(pattern)
        if (match && match.index <= at && match.index > partAt) {
            part = action
            partAt = match.index
        }
    }
    return part
}
