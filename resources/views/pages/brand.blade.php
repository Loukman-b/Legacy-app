
<x-layouts.app>

@section('title', "Manuals for $brand->name")

@section('content')
    <h1>{{ $brand->name }} Handleidingen</h1>

    <!-- Display top 5 popular manuals for this brand -->
    @if ($top_manuals->isNotEmpty())
        <h2>Top 5 Populairste Handleidingen van {{ $brand->name }}</h2>
        <ul>
            @foreach ($top_manuals as $manual)
                <li>
                    <a href="{{ route('manual.show', ['manual' => $manual->id]) }}">
                        {{ $manual->name }}
                    </a> - {{ $manual->view_count }} keer bekeken
                </li>
            @endforeach
        </ul>
    @endif

    <!-- Display all manuals for this brand -->
    <h2>Alle Handleidingen</h2>
    <ul>
        @foreach ($manuals as $manual)
            <li>
                <a href="{{ route('manual.show', ['manual' => $manual->id]) }}">
                    {{ $manual->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
</x-layouts.app>