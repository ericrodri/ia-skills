<x-mail::message>
# Hola{{ $name ? ', '.$name : '' }}

@if($digest['total_new'] > 0)
Esta semana se han publicado **{{ number_format($digest['total_new'], 0, ',', '.') }} skills nuevas** en ia-skills. Estas son las más votadas:
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
@if(($digest['more_guides'] ?? 0) > 0)
[Y {{ $digest['more_guides'] }} {{ $digest['more_guides'] === 1 ? 'guía más' : 'guías más' }} esta semana →]({{ route('guides.index') }})

@endif
@endif

<x-mail::button :url="route('rankings.index')">
Ver el ranking de la semana
</x-mail::button>

Un saludo,<br>
El equipo de ia-skills

<x-mail::subcopy>
Recibes este email porque te suscribiste al resumen semanal. [Darte de baja con un clic]({{ $unsubscribeUrl }})@if($preferencesUrl) · [Gestionar preferencias]({{ $preferencesUrl }})@endif
</x-mail::subcopy>
</x-mail::message>
