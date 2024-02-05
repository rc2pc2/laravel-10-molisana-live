@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $pasta['titolo'] }}
                            </h1>
                            <p>
                                Tipo: {{ $pasta['tipo'] }}
                            </p>
                            <p>
                                Cottura: {{ $pasta['cottura'] }}
                            </p>
                            <p>
                                Cottura: {{ $pasta['peso'] }}
                            </p>

                            <div class="card-image">
                                <img class="w-50" src="{{  $pasta['src'] }}" alt="{{ $pasta['titolo'] }} ">
                            </div>
                            <div class="card-body">
                                <h2>
                                    Descrizione
                                </h2>
                                <p>
                                    {{ $pasta['descrizione'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
