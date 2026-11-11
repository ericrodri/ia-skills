<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Support\McpConnector;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Conector MCP remoto de ia-skills (transporte «Streamable HTTP»).
 *
 * - POST /api/mcp           catálogo público, sin clave.
 * - POST /api/mcp/{clave}   lo mismo más las skills propias del dueño de la
 *                           clave de API (la del perfil), incluidas las privadas.
 *
 * Es la URL que se pega en Claude → Ajustes → Conectores, o en
 * `claude mcp add --transport http`. La clave va en la ruta porque los
 * conectores de Claude no permiten añadir cabeceras; regenerarla en el perfil
 * corta el acceso. Sin sesiones ni streaming: cada petición JSON-RPC recibe
 * su respuesta en JSON, que el protocolo permite.
 *
 * Las herramientas están en App\Support\McpConnector.
 */
class McpConnectorController extends Controller
{
    private const PROTOCOLS = ['2025-06-18', '2025-03-26', '2024-11-05'];

    public function handle(Request $request, ?string $clave = null): JsonResponse|Response
    {
        $user = null;

        if ($clave !== null) {
            $user = User::findByApiToken($clave);

            // 404 y no 401: con un 401 Claude intentaría un inicio de sesión
            // OAuth que no existe y el error sería incomprensible.
            if (! $user) {
                return response()->json($this->error(null, -32001, 'Clave no válida. Genera una nueva en tu perfil de ia-skills.com y vuelve a añadir el conector.'), 404);
            }

            $user->forceFill(['api_token_last_used_at' => now()])->save();
        }

        $payload = $request->json()->all();

        if (! is_array($payload) || $payload === []) {
            return response()->json($this->error(null, -32700, 'Se esperaba un mensaje JSON-RPC.'), 400);
        }

        $connector = new McpConnector($user);

        // Lotes (versiones antiguas del protocolo): una respuesta por petición.
        if (array_is_list($payload)) {
            $responses = array_values(array_filter(array_map(fn ($message) => is_array($message) ? $this->dispatch($connector, $message) : null, $payload)));

            return $responses ? response()->json($responses) : response()->noContent(202);
        }

        $response = $this->dispatch($connector, $payload);

        // Notificaciones y respuestas del cliente: sin cuerpo.
        return $response ? response()->json($response) : response()->noContent(202);
    }

    /**
     * No hay canal de eventos del servidor: el protocolo pide 405 en ese caso.
     */
    public function stream(): Response
    {
        return response('Este servidor MCP solo admite POST.', 405)->header('Allow', 'POST');
    }

    /**
     * @param  array<string, mixed>  $message
     * @return array<string, mixed>|null
     */
    private function dispatch(McpConnector $connector, array $message): ?array
    {
        $id = $message['id'] ?? null;
        $method = $message['method'] ?? null;

        // Notificación (sin id) o respuesta del cliente (sin método).
        if (! array_key_exists('id', $message) || ! is_string($method)) {
            return null;
        }

        $params = is_array($message['params'] ?? null) ? $message['params'] : [];

        return match ($method) {
            'initialize' => $this->result($id, [
                'protocolVersion' => in_array($params['protocolVersion'] ?? null, self::PROTOCOLS, true)
                    ? $params['protocolVersion']
                    : self::PROTOCOLS[0],
                'capabilities' => ['tools' => ['listChanged' => false]],
                'serverInfo' => ['name' => 'ia-skills', 'title' => 'ia-skills', 'version' => '1.0.0', 'websiteUrl' => url('/')],
                'instructions' => $connector->instructions(),
            ]),
            'ping' => $this->result($id, new \stdClass),
            'tools/list' => $this->result($id, ['tools' => $connector->tools()]),
            'tools/call' => $this->callTool($connector, $id, $params),
            // Claude los pide aunque no los anunciemos: lista vacía mejor que error.
            'resources/list' => $this->result($id, ['resources' => []]),
            'prompts/list' => $this->result($id, ['prompts' => []]),
            default => $this->error($id, -32601, "Método no admitido: {$method}"),
        };
    }

    /**
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     */
    private function callTool(McpConnector $connector, mixed $id, array $params): array
    {
        $name = (string) ($params['name'] ?? '');
        $arguments = is_array($params['arguments'] ?? null) ? $params['arguments'] : [];

        $output = $connector->call($name, $arguments);

        if ($output === null) {
            return $this->error($id, -32602, "Herramienta desconocida: {$name}");
        }

        return $this->result($id, [
            'content' => [['type' => 'text', 'text' => $output['text']]],
            'isError' => $output['isError'],
        ]);
    }

    /** @return array<string, mixed> */
    private function result(mixed $id, mixed $result): array
    {
        return ['jsonrpc' => '2.0', 'id' => $id, 'result' => $result];
    }

    /** @return array<string, mixed> */
    private function error(mixed $id, int $code, string $message): array
    {
        return ['jsonrpc' => '2.0', 'id' => $id, 'error' => ['code' => $code, 'message' => $message]];
    }
}
