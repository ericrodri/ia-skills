<?php

/*
 * Distribución del catálogo fuera de la web: el paquete npm de
 * tools/ia-skills-cli, que funciona como CLI y como servidor MCP de Claude Code.
 *
 * El comando que se ofrece en la web (`npx -y ia-skills mcp`) solo funciona si
 * el paquete está publicado en npm. Mientras no lo esté, la web no debe
 * ofrecerlo: prometería algo que falla al pegarlo en la terminal.
 */
return [
    /*
     * Pon DISTRIBUTION_MCP_ENABLED=true en el .env de producción justo después
     * de `npm publish`, y no antes.
     */
    'mcp_enabled' => (bool) env('DISTRIBUTION_MCP_ENABLED', false),

    /*
     * Nombre del paquete en npm. Está aquí porque `ia-skills` puede estar
     * ocupado: si al publicar hay que cambiarlo, se cambia esta variable y el
     * comando que ve el usuario se actualiza solo.
     */
    'npm_package' => env('DISTRIBUTION_NPM_PACKAGE', 'ia-skills'),
];
