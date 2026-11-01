<x-mail::message>
# Confirma tu suscripción

@if($packProfession)
Alguien (esperamos que tú) ha pedido el pack de las mejores skills de IA para {{ $packProfession }} con este email. Al confirmar, podrás descargar el pack y empezarás a recibir el resumen semanal de ia-skills: las skills de IA más votadas de la semana y las guías nuevas, un email los lunes.
@else
Alguien (esperamos que tú) ha apuntado este email al resumen semanal de ia-skills: las skills de IA más votadas de la semana y las guías nuevas, un email los lunes.
@endif

<x-mail::button :url="$confirmUrl">
{{ $packProfession ? 'Confirmar y descargar el pack' : 'Confirmar suscripción' }}
</x-mail::button>

El enlace caduca en 7 días. Si no has sido tú, ignora este email: no te llegará nada más.

Un saludo,<br>
El equipo de ia-skills
</x-mail::message>
