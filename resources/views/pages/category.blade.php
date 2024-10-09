<x-layouts.app>

@section('title', "Merken in $category")

@section('content')
<h1>{{ ucfirst($category) }} Merken</h1>

<!-- Sectie voor Merken -->
<h2>Merken A t/m Z</h2>
<div class="container d-flex justify-content-center align-items-center">
    <div class="row">
        @foreach ($brands as $brand)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('brand.show', ['brand' => $brand->id]) }}">{{ $brand->name }}</a>
                        </h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

</x-layouts.app>
