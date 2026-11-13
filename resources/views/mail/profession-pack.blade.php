<x-mail::message>
# Tu pack para {{ $packName }}

{{ $packTitle }}, con el prompt completo de cada uno. Desde la página puedes guardarlos como PDF.

<x-mail::button :url="$packUrl">
Abrir el pack
</x-mail::button>

El enlace funciona durante {{ $days }} días.

Un saludo,<br>
El equipo de ia-skills
</x-mail::message>
