@extends('layouts.app')

@section('main-content')

    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $recipe->name }}
                            </h1>
                            <p>
                                Complessita': {{ $recipe->complexity }}
                            </p>
                            <p>
                                Tempo di preparazione: {{ $recipe->preparation_time }} minuti
                            </p>
                            <p>
                                Tempo di cottura: {{ $recipe->cooking_time }} minuti
                            </p>
                            <div class="card-image">
                                <img class="w-50" src="{{  $recipe->image }}" alt="{{ $recipe->name }}'s picture">
                            </div>
                            <p>
                                Descrizione: {{ $recipe->description }}
                            </p>

                            <div class="actions mb-3 pt-3">
                                <a href="{{ route('guest.recipes.edit', $recipe->id) }}">
                                    <button class="btn btn-primary">
                                        Modifica questa ricetta
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
