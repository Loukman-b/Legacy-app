<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <x-slot:breadcrumb>
        <li><a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/" alt="Manuals for '{{$brand->name}}'" title="Manuals for '{{$brand->name}}'">{{ $brand->name }}</a></li>
    </x-slot:breadcrumb>

    <h1>{{ $brand->name }}</h1>

    <p>{{ __('introduction_texts.type_list', ['brand'=>$brand->name]) }}</p>

    <?php
    // Haal de 5 populairste handleidingen van dit merk op
    $top_manuals = App\Models\Manual::where('brand_id', $brand->id)
                    ->orderBy('view_count', 'desc')
                    ->take(5)
                    ->get();
    ?>

    <!-- Sectie voor de top 5 populairste handleidingen met nummering -->
    <h2 class="mt-4">Top 5 Populairste Handleidingen van {{ $brand->name }}</h2>
    <div class="row mb-4">
        @foreach ($top_manuals as $index => $manual)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <!-- Voeg nummering toe voor de handleidingen -->
                        <h5 class="card-title">{{ $index + 1 }}. {{ $brand->name }}: {{ $manual->type }}</h5>
                        <a href="{{ route('increment', ['manual_id'=> $manual->id]) }}">{{ $manual->name }}</a>
                        <p class="mt-2 small text-muted">{{ $manual->view_count }} keer bekeken</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Bestaande lijst met handleidingen -->
    <h3>Alle Handleidingen</h3>
    <div class="row">
        @foreach ($manuals as $index => $manual)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $manual->name }}</h5>
                        @if ($manual->locally_available)
                            <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/{{ $manual->id }}/" class="btn btn-success">Downloaden</a>
                            <p class="mt-2 small text-muted">{{ $manual->filesize_human_readable }}</p>
                        @else
                            <a class="btn btn-primary mb-2" 
                               href="{{ route('increment', ['manual_id'=> $manual->id]) }}" 
                               target="_blank">{{ $manual->name }}</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-layouts.app>
