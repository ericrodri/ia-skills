<x-mail::message>
# Hola, {{ $user->name }}

@if($digest['total_new'] > 0)
Esta semana se han publicado **{{ $digest['total_new'] }} skills nuevas** en ia-skills. Estas son las más votadas:
@else
Esto es lo nuevo de la semana en ia-skills.
@endif

@foreach($digest['skills'] as $skill)
**[{{ $skill['title'] }}]({{ $skill['url'] }})**{{ $skill['profession'] ? ' · '.$skill['profession'] : '' }}<br>
{{ \Illuminate\Support\Str::limit($skill['description'], 160) }}

@endforeach

@if(! empty($digest['guides']))
## Guías
@foreach($digest['guides'] as $guide)
**[{{ $guide['title'] }}]({{ $guide['url'] }})**{{ $guide['is_new'] ? ' · nueva' : ' · actualizada' }}<br>
{{ \Illuminate\Support\Str::limit($guide['excerpt'], 160) }}

@endforeach
@endif

<x-mail::button :url="route('rankings.index')">
Ver el ranking de la semana
</x-mail::button>

Un saludo,<br>
El equipo de ia-skills

<x-mail::subcopy>
Recibes este email porque te suscribiste al resumen semanal. [Darte de baja con un clic]({{ $unsubscribeUrl }}) · [Gestionar preferencias]({{ route('profile.edit') }})
</x-mail::subcopy>
</x-mail::message>
