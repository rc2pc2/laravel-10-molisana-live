@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
                    @foreach ($mills as $mill)
                        <div class="col">
                            <a href="{{ route('guest.mills.show', $mill->id) }}">
                                <div class="card">
                                    <img src="{{ $mill->picture }}" alt="{{ $mill->name }} picture">
                                    <div class="card-body">
                                        <p class="text-uppercase">
                                            {{ $mill->name}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
