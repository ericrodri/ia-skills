import { createRequire } from 'node:module'

/**
 * Versión del paquete, leída de package.json (npm siempre lo incluye en el
 * tarball). Antes estaba escrita a mano en mcp.mjs y api.mjs y se quedó
 * atrasada: la 0.1.1 publicada se anunciaba como 0.1.0.
 */
export const VERSION = createRequire(import.meta.url)('../package.json').version
