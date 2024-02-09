@extends('layouts.app')

@section('main-content')
    <main>
        <section class="form-container container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1 class="title mb-4 pt-3">
                        @yield('page-heading')
                    </h1>

                    @include('partials.form-error')

                    <form action="@yield('form-action')" method="POST" >
                        @csrf

                        {{-- metodo custom --}}
                        {{-- @method('PUT') --}}
                        @yield('form-method')

                        <div class="mb-3">
                            <label for="titolo"class="form-label">
                                Nome del tipo di pasta:
                            </label>
                            <input type="text" name="titolo" id="titolo" class="form-control" value="{{ old( 'titolo' ,$pasta->titolo) }}">
                        </div>


                        <div class="mb-3">
                            <label for="tipo"class="form-label">Tipo di pasta:</label>
                            <input type="text" name="tipo" id="tipo" value="{{ old( 'tipo' ,$pasta->tipo) }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="cottura"class="form-label">Tempo di cottura:</label>
                            <input type="text" name="cottura" id="cottura" value="{{ old( 'cottura' ,$pasta->cottura) }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="peso"class="form-label">Peso:</label>
                            <input type="text" name="peso" id="peso"  value="{{ old( 'peso' ,$pasta->peso) }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="src"class="form-label">Url immagine</label>
                            <input type="text" name="src" id="src" class="form-control" value="{{ old( 'src' ,$pasta->src) }}">
                        </div>

                        <div class="mb-3">
                            <label for="descrizione"class="form-label">Descrizione:</label>
                            <textarea type="text" name="descrizione" id="descrizione" class="form-control"
                            rows="4">{{ old( 'descrizione' , $pasta->descrizione) }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{-- Modifica il tipo di pasta --}}
                            @yield('submit-button-text')
                        </button>

                        <button type="reset"  class="btn btn-warning">Pulisci il form</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection