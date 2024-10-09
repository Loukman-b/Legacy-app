<x-layouts.app>

    <x-slot:introduction_text>
        <p><img src="img/afbl_logo.png" align="right" width="100" height="100">{{ __('introduction_texts.homepage_line_1') }}</p>
        <p>{{ __('introduction_texts.homepage_line_2') }}</p>
        <p>{{ __('introduction_texts.homepage_line_3') }}</p>
    </x-slot:introduction_text>

    <h1>
        <x-slot:title>
            {{ __('misc.all_brands') }}
        </x-slot:title>
    </h1>

    <?php
    // Haal de 10 populairste handleidingen op
    $top_manuals = App\Models\Manual::orderBy('view_count', 'desc')->take(10)->get();
    $size = count($brands);
    $columns = 3;
    $chunk_size = ceil($size / $columns);
    ?>
    <p>Ga naar letter</p>
    <nav>
        @foreach (range('A', 'Z') as $letter)
            <a href="#{{ $letter }}">{{ $letter }}</a>
        @endforeach
    </nav>

    <div class="container">
        <!-- Sectie voor populairste handleidingen -->
        <h2 class="mt-4">Top 10 Populairste Handleidingen</h2>
        <div class="row mb-4">            
            @foreach ($top_manuals as $index => $manual)

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <!-- Voeg nummering toe voor de handleidingen -->
                            <h5 class="card-title">{{ $index + 1 }}.</h5>
                            <a href="{{ route('increment', ['manual_id'=> $manual->id]) }}">{{ $manual->name }}</a>
                            <p class="mt-2 small text-muted">{{ $manual->view_count }} keer bekeken</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        </ul>

        <!-- Voorbeeld van de merken sectie -->                
        <h2>Merken A t/m Z</h2>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">
            
                @foreach($brands->chunk($chunk_size) as $chunk)
                    <div class="col-md-4">
                        <ul class="list-group">
                            @foreach($chunk as $brand)
                        
                                <?php
                                $current_first_letter = strtoupper(substr($brand->name, 0, 1));
                        
                                if (!isset($header_first_letter) || (isset($header_first_letter) && $current_first_letter != $header_first_letter)) {
                                    echo '</ul>
                                    <h2 id="' . $current_first_letter . '" class="mt-4 text-primary">' . $current_first_letter . '</h2>
                                    <ul class="list-group">';
                                }
                                $header_first_letter = $current_first_letter;
                                ?>
                        
                                <li class="list-group-item my-2 bg-secondary bg-gradient rounded shadow-sm hover:bg-light hover:text-dark hover:shadow-lg"> 
                                    <a class="text-light p-3" href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/">{{ $brand->name }}</a>
                                </li>
                        
                            @endforeach
                        </ul>
                        
                        
                    </div>
                    <?php
                    unset($header_first_letter);
                    ?>
                @endforeach

            </div>
        </div>
    </div>
    

</x-layouts.app>
