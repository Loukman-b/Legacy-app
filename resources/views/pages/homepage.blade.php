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
    $size = count($brands);
    $columns = 3;
    $chunk_size = ceil($size / $columns);
    ?>
<h1>Alle merken</h1>
<p>Ga naar letter</p>
<nav>
    @foreach (range('A', 'Z') as $letter)
        <a href="#{{ $letter }}">{{ $letter }}</a>
    @endforeach
</nav>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <!-- Example row of columns -->
        <div class="row">
            
            @foreach($brands->chunk($chunk_size) as $chunk)
                <div class="col-md-4">
                
                <ul>
                    @foreach($chunk as $brand)

                        <?php
                        $current_first_letter = strtoupper(substr($brand->name, 0, 1));

                        if (!isset($header_first_letter) || (isset($header_first_letter) && $current_first_letter != $header_first_letter)) {
                            echo '</ul>
                            <h2 id="' . $current_first_letter . '">' . $current_first_letter . '</h2>
                            <ul>';
                        }
                        $header_first_letter = $current_first_letter;
                        ?>

                        <li class="my-2 bg-secondary bg-gradient rounded shadow-sm hover:bg-light hover:text-dark hover:shadow-lg"> 
                            <a class="  text-light p-3" href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/">{{ $brand->name }}</a>
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
</x-layouts.app>
