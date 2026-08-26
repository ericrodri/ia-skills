{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>ia-skills — últimas skills y prompts de IA</title>
        <link>{{ route('skills.index') }}</link>
        <description>Las skills y prompts de IA más recientes publicados por la comunidad de ia-skills, organizados por profesión.</description>
        <language>es-es</language>
        <lastBuildDate>{{ $items[0]['published'] ?? now()->toRssString() }}</lastBuildDate>
        <atom:link href="{{ route('feed') }}" rel="self" type="application/rss+xml" />
        @foreach($items as $item)
            <item>
                <title>{{ $item['title'] }}</title>
                <link>{{ $item['url'] }}</link>
                <guid isPermaLink="true">{{ $item['url'] }}</guid>
                <description>{{ $item['description'] }}</description>
                @if($item['category'])
                    <category>{{ $item['category'] }}</category>
                @endif
                @if($item['published'])
                    <pubDate>{{ $item['published'] }}</pubDate>
                @endif
            </item>
        @endforeach
    </channel>
</rss>
