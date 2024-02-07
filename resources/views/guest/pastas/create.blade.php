@extends('layouts.app')

@section('main-content')
    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-5 pt-3">
                    Crea nuovo tipo di pasta:
                </h1>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif



                <form action="{{ route('guest.pastas.store') }}" method="POST" >
                    @csrf

                    <div class="mb-3">
                        <label for="titolo"class="form-label">
                            Nome del tipo di pasta:
                        </label>
                        <input type="text" name="titolo" id="titolo" class="form-control"
                        value="{{ old('titolo') }}" >
                    </div>

                    <div class="mb-3">
                        <label for="tipo"class="form-label">Tipo di pasta:</label>
                        <input type="text" name="tipo" id="tipo" class="form-control"  value="{{ old('tipo') }}"  >
                    </div>

                    <div class="mb-3">
                        <label for="cottura"class="form-label">Tempo di cottura:</label>
                        <input type="text" name="cottura" id="cottura" class="form-control" value="{{ old('cottura') }}">
                    </div>

                    <div class="mb-3">
                        <label for="peso"class="form-label">Peso:</label>
                        <input type="text" name="peso" id="peso" class="form-control" value="{{ old('peso') }}">
                    </div>

                    <div class="mb-3">
                        <label for="src"class="form-label">Url immagine</label>
                        <input type="text" name="src" id="src" class="form-control" value="{{ old('src') }}">
                    </div>

                    <div class="mb-3">
                        <label for="descrizione"class="form-label">Descrizione:</label>
                        <textarea type="text" name="descrizione" id="descrizione" class="form-control"
                        rows="4">{{ old('descrizione') }}</textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Crea nuovo tipo di pasta</button>
                    <button type="reset"  class="btn btn-warning">Pulisci il form</button>
                </form>
            </div>
        </div>
    </section>
@endsection
