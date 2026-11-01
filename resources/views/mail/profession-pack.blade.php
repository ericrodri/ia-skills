<x-mail::message>
# Tu pack de skills para {{ $professionName }}

Aquí tienes las {{ $size }} skills de IA más votadas para {{ $professionName }}, con el prompt completo de cada una. Desde la página puedes guardarlas como PDF.

<x-mail::button :url="$packUrl">
Abrir el pack
</x-mail::button>

El enlace funciona durante {{ $days }} días.

Un saludo,<br>
El equipo de ia-skills
</x-mail::message>
