@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">

                    @foreach ($products as $product)
                        <div class="col">
                            <div class="card">
                                <img src="{{ $product['src'] }}" alt="">
                                <div class="card-body">
                                    <p class="text-uppercase">
                                        {{ $product['titolo'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
