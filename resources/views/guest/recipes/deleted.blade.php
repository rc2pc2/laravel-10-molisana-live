@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
                    @foreach ($recipes as $recipe)
                        <div class="col">
                            <a href="{{ route('guest.recipes.show', $recipe->id) }}">
                                <div class="card">
                                    <img src="{{ $recipe->image }}" alt="{{ $recipe->name }} picture">
                                    <div class="card-body">
                                        <p class="">
                                            {{ $recipe->name}}
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
