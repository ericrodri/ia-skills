/**
 * Diff por líneas (LCS) entre dos versiones de un prompt.
 *
 * Los prompts miden decenas o pocos cientos de líneas, así que la tabla
 * O(n·m) de la subsecuencia común más larga cabe de sobra en memoria y evita
 * añadir una dependencia solo para el historial de versiones.
 *
 * @param {string} before
 * @param {string} after
 * @returns {Array<{type: 'same'|'added'|'removed', text: string}>}
 */
export function lineDiff(before, after) {
    const a = (before ?? '').replace(/\r\n/g, '\n').split('\n')
    const b = (after ?? '').replace(/\r\n/g, '\n').split('\n')
    const n = a.length
    const m = b.length

    const lcs = Array.from({ length: n + 1 }, () => new Uint32Array(m + 1))

    for (let i = n - 1; i >= 0; i--) {
        for (let j = m - 1; j >= 0; j--) {
            lcs[i][j] = a[i] === b[j] ? lcs[i + 1][j + 1] + 1 : Math.max(lcs[i + 1][j], lcs[i][j + 1])
        }
    }

    const result = []
    let i = 0
    let j = 0

    while (i < n && j < m) {
        if (a[i] === b[j]) {
            result.push({ type: 'same', text: a[i] })
            i++
            j++
        } else if (lcs[i + 1][j] >= lcs[i][j + 1]) {
            result.push({ type: 'removed', text: a[i++] })
        } else {
            result.push({ type: 'added', text: b[j++] })
        }
    }

    while (i < n) result.push({ type: 'removed', text: a[i++] })
    while (j < m) result.push({ type: 'added', text: b[j++] })

    return result
}
