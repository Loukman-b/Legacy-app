<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <x-slot:breadcrumb>
        <li><a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/" alt="Manuals for '{{$brand->name}}'" title="Manuals for '{{$brand->name}}'">{{ $brand->name }}</a></li>
    </x-slot:breadcrumb>

    <h1>{{ $brand->name }}</h1>

    <p>{{ __('introduction_texts.type_list', ['brand'=>$brand->name]) }}</p>

    <div class="row">
        @foreach ($manuals as $index => $manual)
            <div class="col-md-6 mb-3"> <!-- Colom 50% breedte -->
  @if ($manual->locally_available)
            <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/{{ $manual->id }}/" alt="{{ $manual->name }}" title="{{ $manual->name }}">{{ $manual->name }}</a>
            ({{$manual->filesize_human_readable}})
        @else
            <a class="btn btn-primary mb-2" 
               href="{{ route('increment', ['manual_id'=> $manual->id]) }}" 
               target="_blank" 
               alt="{{ $manual->name }}" 
               title="{{ $manual->name }}">{{ $manual->name }}</a>
        @endif
            </div>

            @if (($index + 1) % 2 === 0)
                <!-- Voeg een nieuwe rij toe na elke twee handleidingen -->
                </div>
                <div class="row">
            @endif
        @endforeach

        <!-- Sluit de laatste rij af als er een oneven aantal items is -->
        </div>
    </div>

</x-layouts.app>
