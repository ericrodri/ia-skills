<?php

return [
    'title'          => 'Cómo conectar Claude con Unity y crear NPCs con IA real',
    'navTitle'       => 'Claude con Unity',
    'seoTitle'       => 'Conectar Claude con Unity: guía práctica para videojuegos con IA',
    'description'    => 'Llama a la API de Anthropic desde C# con UnityWebRequest, crea NPCs que recuerdan la conversación y genera misiones procedurales. Sin plugins de pago.',
    'excerpt'        => 'Conectar Claude con Unity no requiere ningún plugin. Tres clases C# y una API key son suficientes para tener un NPC que recuerda lo que le dijiste hace diez minutos.',
    'category'       => 'Tutorial',
    'published'      => '2026-09-23',
    'updated'        => '2026-09-23',
    'readingMinutes' => 13,
    'words'          => 2200,
    'about'          => 'Claude',
    'related'        => ['empezar-con-claude-code', 'que-es-un-agente-de-ia', 'crear-tu-herramienta-con-ia-sin-programar'],
    'toc'            => [
        'por-que'       => 'Por qué Claude encaja mejor que otras opciones',
        'requisitos'    => 'Lo que necesitas antes de empezar',
        'estructura'    => 'Estructura del proyecto',
        'config'        => 'ClaudeConfig: la API key sin exponerla',
        'modelos'       => 'ClaudeModels: los DTOs de la API',
        'servicio'      => 'ClaudeService: el cliente HTTP',
        'npc'           => 'Ejemplo 1: NPC con memoria de conversación',
        'misiones'      => 'Ejemplo 2: generador de misiones procedurales',
        'produccion'    => 'Llevar esto a producción',
        'costes'        => 'Cuánto cuesta en tokens',
    ],
    'faq'            => [
        '¿Necesito un plugin de Unity para llamar a la API de Anthropic?' => 'No. Unity incluye UnityWebRequest, que es suficiente para hacer llamadas REST a cualquier API. Solo necesitas añadir Newtonsoft.Json desde el Package Manager para serializar y deserializar el JSON.',
        '¿Qué modelo de Claude recomendáis para videojuegos?' => 'Para diálogos en tiempo real, Haiku 4.5 (claude-haiku-4-5-20251001) ofrece la mejor relación latencia/precio. Para generación de contenido offline —misiones, lore, descripciones— Sonnet 5 da resultados cualitativamente superiores sin que el jugador note el tiempo de espera.',
        '¿Puedo incluir la API key directamente en el build?' => 'No, nunca. Un build de Unity se puede decompilar y la key quedaría expuesta. La solución correcta para producción es un servidor intermedio tuyo que reciba las peticiones del juego, añada la key y las reenvíe a Anthropic. En desarrollo local, el ScriptableObject es suficiente porque no se incluye en el build.',
        '¿Funciona en móvil (iOS y Android)?' => 'Sí. UnityWebRequest funciona en todas las plataformas que soporta Unity. En iOS asegúrate de que el dominio api.anthropic.com está en la lista de dominios permitidos en el App Transport Security (Info.plist). En Android no hay configuración adicional.',
        '¿Puedo usar streaming para mostrar el texto letra a letra?' => 'La API de Anthropic soporta streaming vía Server-Sent Events. Unity no tiene soporte nativo para SSE, pero puedes implementarlo con un DownloadHandlerScript personalizado que lea los chunks según llegan. Para la mayoría de juegos, la latencia de una respuesta completa (1-2 segundos con Haiku) es aceptable y simplifica mucho el código.',
    ],
    'ctaTitle'       => 'Siguiente paso: Claude Code para desarrollar el juego más rápido',
    'ctaBody'        => 'Si estás construyendo el juego desde cero o refactorizando código C# existente, <a href="/guias/empezar-con-claude-code">Claude Code</a> trabaja directamente sobre tus archivos de Unity desde la terminal y puede generar, revisar y modificar scripts sin que tengas que copiar y pegar.',
    'body'           => <<<'HTML'
<p>Los NPCs que repiten cuatro líneas de diálogo hardcodeadas llevan décadas siendo el estándar. No porque nadie quisiera algo mejor, sino porque conectar un modelo de lenguaje a un juego en tiempo real era, hasta hace poco, una ingeniería de propósito especial. Ahora no lo es. La API de Anthropic tiene un endpoint REST como cualquier otro, y Unity lleva años sabiendo hacer llamadas HTTP. Esta guía te muestra la plomería exacta.</p>

<h2 id="por-que">Por qué Claude encaja mejor que otras opciones</h2>

<p>Las alternativas habituales son dos: modelos locales (Llama, Phi, Mistral corriendo en la máquina del jugador) o GPT-4o/Gemini vía API. Los modelos locales requieren que el jugador tenga hardware suficiente y añaden gigabytes al instalador. GPT-4o y Gemini son opciones válidas, pero Claude tiene una ventana de contexto más grande por defecto —útil cuando el NPC necesita recordar una conversación larga— y Haiku 4.5 es actualmente uno de los modelos más rápidos y baratos del mercado para respuestas cortas.</p>

<p>Para generación de contenido que no ocurre en tiempo real (misiones, descripciones de objetos, lore del mundo), cualquier modelo de la familia Claude funciona bien. Para diálogos en los que el jugador espera la respuesta, Haiku es la elección correcta.</p>

<h2 id="requisitos">Lo que necesitas antes de empezar</h2>

<ul>
    <li><strong>Unity 2021.3 LTS o superior.</strong> El código funciona en versiones más antiguas, pero las LTS tienen mejor soporte a largo plazo.</li>
    <li><strong>Una API key de Anthropic.</strong> Se obtiene en <code>console.anthropic.com</code>. El plan de pago por uso es suficiente para desarrollo; no necesitas ningún plan fijo.</li>
    <li><strong>Newtonsoft.Json.</strong> Desde el Package Manager de Unity: <em>Window → Package Manager → Add package by name</em> → <code>com.unity.nuget.newtonsoft-json</code>.</li>
</ul>

<p>No hace falta ningún plugin de terceros ni ningún SDK de Anthropic. Todo lo que necesitas ya está en Unity.</p>

<h2 id="estructura">Estructura del proyecto</h2>

<p>Cuatro archivos, todos en <code>Assets/Scripts/AI/</code>:</p>

<pre><code>Assets/
  Scripts/
    AI/
      ClaudeConfig.cs      ← API key y parámetros del modelo
      ClaudeModels.cs      ← clases que mapean el JSON de la API
      ClaudeService.cs     ← cliente HTTP, la lógica real
      NPCController.cs     ← ejemplo de uso con historial</code></pre>

<h2 id="config">ClaudeConfig: la API key sin exponerla</h2>

<p>Un <code>ScriptableObject</code> es la forma correcta de guardar configuración en Unity: vive como un asset en el proyecto, se rellena en el Inspector y <strong>no se compila dentro del código</strong>, así que no aparece en la memoria del proceso.</p>

<pre><code>using UnityEngine;

[CreateAssetMenu(fileName = "ClaudeConfig", menuName = "AI/Claude Config")]
public class ClaudeConfig : ScriptableObject
{
    [Header("Modelo")]
    public string model      = "claude-haiku-4-5-20251001";
    public int    maxTokens  = 512;

    [Header("Autenticación")]
    public string apiKey;

    [Header("Red")]
    public float timeoutSeconds = 20f;
}</code></pre>

<p>Crea el asset con clic derecho en el Project → <em>Create → AI → Claude Config</em> y pega tu key en el campo <code>Api Key</code> del Inspector. Asegúrate de que el asset no está dentro de una carpeta <code>Resources/</code> (eso sí lo incluiría en el build) y de añadirlo a <code>.gitignore</code> si el repositorio es público.</p>

<h2 id="modelos">ClaudeModels: los DTOs de la API</h2>

<p>La API de Anthropic usa un formato JSON fijo. Estas clases le dicen a Newtonsoft.Json cómo construirlo y cómo leer la respuesta:</p>

<pre><code>using System;
using System.Collections.Generic;

[Serializable]
public class ClaudeRequest
{
    public string             model;
    public int                max_tokens;
    public string             system;
    public List&lt;ClaudeMessage&gt; messages;
}

[Serializable]
public class ClaudeMessage
{
    public string role;     // "user" o "assistant"
    public string content;
}

[Serializable]
public class ClaudeResponse
{
    public List&lt;ClaudeContent&gt; content;
    public string              stop_reason;
    public ClaudeUsage         usage;
}

[Serializable]
public class ClaudeContent
{
    public string type;
    public string text;
}

[Serializable]
public class ClaudeUsage
{
    public int input_tokens;
    public int output_tokens;
}</code></pre>

<h2 id="servicio">ClaudeService: el cliente HTTP</h2>

<p>Aquí está toda la lógica de red. El componente expone dos métodos: <code>Ask</code> para preguntas sin historial y <code>Chat</code> para conversaciones donde el NPC recuerda lo que se dijo antes.</p>

<pre><code>using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
using Newtonsoft.Json;
using UnityEngine;
using UnityEngine.Networking;

public class ClaudeService : MonoBehaviour
{
    private const string ENDPOINT   = "https://api.anthropic.com/v1/messages";
    private const string API_VER    = "2023-06-01";

    [SerializeField] private ClaudeConfig config;

    private readonly List&lt;ClaudeMessage&gt; _history = new();

    public void ClearHistory() =&gt; _history.Clear();

    // Pregunta sin historial: cada llamada es independiente
    public IEnumerator Ask(string prompt, string system,
                           Action&lt;string&gt; onSuccess, Action&lt;string&gt; onError)
    {
        var request = Build(system, new List&lt;ClaudeMessage&gt;
        {
            new() { role = "user", content = prompt }
        });
        yield return Send(request, onSuccess, onError);
    }

    // Conversación con memoria: acumula turnos en _history
    public IEnumerator Chat(string userMessage, string system,
                            Action&lt;string&gt; onSuccess, Action&lt;string&gt; onError)
    {
        _history.Add(new ClaudeMessage { role = "user", content = userMessage });

        var request = Build(system, new List&lt;ClaudeMessage&gt;(_history));

        yield return Send(request, response =&gt;
        {
            _history.Add(new ClaudeMessage { role = "assistant", content = response });
            onSuccess(response);
        }, onError);
    }

    private ClaudeRequest Build(string system, List&lt;ClaudeMessage&gt; messages) =&gt;
        new()
        {
            model      = config.model,
            max_tokens = config.maxTokens,
            system     = system,
            messages   = messages,
        };

    private IEnumerator Send(ClaudeRequest payload,
                             Action&lt;string&gt; onSuccess, Action&lt;string&gt; onError)
    {
        byte[] body = Encoding.UTF8.GetBytes(JsonConvert.SerializeObject(payload));

        using var www = new UnityWebRequest(ENDPOINT, "POST")
        {
            uploadHandler   = new UploadHandlerRaw(body),
            downloadHandler = new DownloadHandlerBuffer(),
            timeout         = (int)config.timeoutSeconds,
        };

        www.SetRequestHeader("Content-Type",      "application/json");
        www.SetRequestHeader("x-api-key",         config.apiKey);
        www.SetRequestHeader("anthropic-version", API_VER);

        yield return www.SendWebRequest();

        if (www.result != UnityWebRequest.Result.Success)
        {
            onError?.Invoke($"HTTP {www.responseCode}: {www.error}");
            yield break;
        }

        try
        {
            var res = JsonConvert.DeserializeObject&lt;ClaudeResponse&gt;(www.downloadHandler.text);
            onSuccess?.Invoke(res.content[0].text);
        }
        catch (Exception e)
        {
            onError?.Invoke($"Error al parsear respuesta: {e.Message}");
        }
    }
}</code></pre>

<h2 id="npc">Ejemplo 1: NPC con memoria de conversación</h2>

<p>Un tabernero que recuerda lo que el jugador le dijo hace diez turnos:</p>

<pre><code>using UnityEngine;
using TMPro;

public class NPCController : MonoBehaviour
{
    [SerializeField] private ClaudeService claude;
    [SerializeField] private TMP_Text      dialogueBox;
    [SerializeField] private TMP_InputField playerInput;

    [TextArea(5, 15)]
    [SerializeField] private string systemPrompt = @"
Eres Aldric, tabernero de La Liebre Coja. Hablas de forma directa
y conoces rumores del pueblo. Nunca rompes el personaje.
Respuestas de máximo dos frases.";

    public void OnSend()
    {
        string msg = playerInput.text.Trim();
        if (string.IsNullOrEmpty(msg)) return;

        playerInput.text = "";
        dialogueBox.text = "…";

        StartCoroutine(claude.Chat(
            msg,
            systemPrompt,
            response =&gt; dialogueBox.text = response,
            error    =&gt; dialogueBox.text = "[Sin respuesta]"
        ));
    }

    public void OnResetConversation()
    {
        claude.ClearHistory();
        dialogueBox.text = "¡Bienvenido de nuevo, viajero!";
    }
}</code></pre>

<p>El system prompt vive en el Inspector, así que el diseñador de niveles puede cambiar la personalidad del NPC sin tocar el código.</p>

<h2 id="misiones">Ejemplo 2: generador de misiones procedurales</h2>

<p>Para contenido que se genera una sola vez (al abrir el cofre del jefe, al hablar por primera vez con un personaje), <code>Ask</code> es más eficiente que <code>Chat</code> porque no arrastra historial. Aquí Claude devuelve JSON que Unity deserializa directamente en un objeto <code>Quest</code>:</p>

<pre><code>using System;
using Newtonsoft.Json;
using UnityEngine;

public class QuestGenerator : MonoBehaviour
{
    [SerializeField] private ClaudeService claude;

    private const string SYSTEM = @"
Genera misiones para un RPG de fantasía.
Responde EXCLUSIVAMENTE con JSON válido, sin texto adicional:
{
  ""title"":       ""string"",
  ""description"": ""string"",
  ""objective"":   ""string"",
  ""reward_gold"": int,
  ""difficulty"":  ""easy|medium|hard""
}";

    public void Generate(string context, Action&lt;Quest&gt; onDone)
    {
        StartCoroutine(claude.Ask(
            $"Crea una misión para este contexto: {context}",
            SYSTEM,
            json =&gt;
            {
                try   { onDone(JsonConvert.DeserializeObject&lt;Quest&gt;(json)); }
                catch { Debug.LogWarning($"JSON inesperado: {json}"); }
            },
            error =&gt; Debug.LogError(error)
        ));
    }
}

[Serializable]
public class Quest
{
    public string title, description, objective, difficulty;
    public int    reward_gold;
}</code></pre>

<h2 id="produccion">Llevar esto a producción</h2>

<p>El ScriptableObject es suficiente para desarrollo local porque no viaja dentro del ejecutable. Para una build que distribuirás a jugadores, la arquitectura correcta es añadir un servidor intermedio:</p>

<ol>
    <li>El juego llama a <em>tu</em> servidor (por ejemplo, una Cloud Function o un endpoint de tu backend).</li>
    <li>Tu servidor añade la API key y reenvía la petición a Anthropic.</li>
    <li>Tu servidor puede además validar que la petición viene de un jugador con cuenta, aplicar rate limiting por usuario y registrar el uso.</li>
</ol>

<p>Sin ese servidor intermedio, cualquier jugador con un proxy puede ver la clave en el tráfico de red y usarla a tu costa.</p>

<h2 id="costes">Cuánto cuesta en tokens</h2>

<p>Con claude-haiku-4-5-20251001 (la opción más barata para diálogos en tiempo real), un intercambio típico de 10 turnos con un NPC —system prompt de 100 tokens más el historial— consume aproximadamente 2.000 tokens de entrada y 500 de salida. A los precios actuales, eso son menos de 0,001 $ por conversación completa. Para un juego de 10.000 jugadores activos al día con cinco conversaciones cada uno, el coste mensual de la API ronda los 1.500 $. Es un número que hay que prever, pero está dentro del rango de lo habitual en servicios online.</p>

<p>Para generación de contenido offline (misiones, descripciones), el coste es irrelevante: se genera una vez y se guarda.</p>
HTML,
];
