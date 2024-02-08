@extends('layouts.app')

@section('main-content')

    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $mill->name }}
                            </h1>
                            <p>
                                Regione: {{ $mill->region }}
                            </p>
                            <p>
                                Stato: {{ $mill->country }}
                            </p>
                            <p>
                                Spazio: {{ $mill->size }}mq
                            </p>

                            <p>
                                Numero di mulini attivi: {{ $mill->mills_no }}
                            </p>
                            <div class="card-image">
                                <img class="w-50" src="{{  $mill->picture }}" alt="{{ $mill->name }}'s picture">
                            </div>
                            <div class="actions mb-3 pt-3">
                                <a href="{{ route('guest.mills.edit', $mill->id) }}">
                                    <button class="btn btn-primary">
                                        Modifica questo mulino
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
