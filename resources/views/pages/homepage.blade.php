<x-layouts.app>
    <x-slot:introduction_text>
        <p><img src="img/afbl_logo.png" align="right" width="100" height="100">{{ __('introduction_texts.homepage_line_1') }}</p>
        <p>{{ __('introduction_texts.homepage_line_2') }}</p>
        <p>{{ __('introduction_texts.homepage_line_3') }}</p>
    </x-slot:introduction_text>

    <h1>
        <x-slot:title>
            {{ __('misc.all_categories') }}
        </x-slot:title>
    </h1>

    <!-- Categories Section -->
    <h2>Categorieën</h2>
    <div class="container">
        <div class="row">
            <!-- Example categories -->
            <div class="col-md-4">
                <h3><a href="{{ route('category', ['category'=>'electronics']) }}">Elektronica</a></h3>
                <p>Televisies, telefoons, camera's en meer</p>
            </div>
            <div class="col-md-4">
                <h3><a href="{{ route('category', ['category'=>'home_appliances']) }}">Huishoudelijke Apparaten</a></h3>
                <p>Wasmachines, vaatwassers, koelkasten, enz.</p>
            </div>
            <div class="col-md-4">
                <h3><a href="{{ route('category', ['category'=>'automotive']) }}">Automotive</a></h3>
                <p>Auto-onderdelen, GPS-systemen, enz.</p>
            </div>
        </div>
    </div>
</x-layouts.app>
