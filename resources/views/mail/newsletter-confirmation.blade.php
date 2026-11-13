<x-mail::message>
# Confirma tu suscripción

@if($packTitle)
Alguien (esperamos que tú) ha pedido con este email el pack con {{ $packTitle }}. Al confirmar, podrás descargar el pack y empezarás a recibir el resumen semanal de ia-skills: las skills de IA más votadas de la semana y las guías nuevas, un email los lunes.
@else
Alguien (esperamos que tú) ha apuntado este email al resumen semanal de ia-skills: las skills de IA más votadas de la semana y las guías nuevas, un email los lunes.
@endif

<x-mail::button :url="$confirmUrl">
{{ $packTitle ? 'Confirmar y descargar el pack' : 'Confirmar suscripción' }}
</x-mail::button>

El enlace caduca en 7 días. Si no has sido tú, ignora este email: no te llegará nada más.

Un saludo,<br>
El equipo de ia-skills
</x-mail::message>
