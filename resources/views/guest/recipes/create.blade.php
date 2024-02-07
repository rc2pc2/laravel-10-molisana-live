@extends('layouts.app')

@section('main-content')
    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Aggiungi una nuova ricetta:
                </h1>

                <form action="{{ route('guest.recipes.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Nome della ricetta:
                        </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">URL immagine</label>
                        <input type="text" name="image" id="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="complexity" class="form-label">Complessita':</label>
                        <input type="number" name="complexity" id="complexity" class="form-control" min="1" max="10">
                    </div>

                    <div class="d-flex justify-content-between">

                        <div class="mb-3 me-5">
                            <label for="preparation_time" class="form-label">Tempo di preparazione in minuti:</label>
                            <input type="number" name="preparation_time" id="preparation_time" class="form-control">
                        </div>

                        <div class="mb-3 ms-5">
                            <label for="cooking_time" class="form-label">Tempo di cottura in minuti:</label>
                            <input type="number" name="cooking_time" id="cooking_time" class="form-control">
                        </div>

                    </div>



                    <div class="mb-3">
                        <label for="description"class="form-label">Descrizione:</label>
                        <textarea type="text" name="description" id="description" class="form-control"
                        rows="4">
                        </textarea>
                    </div>



                    <button type="submit" class="btn btn-primary">Aggiungi una nuova ricetta</button>
                    <button type="reset"  class="btn btn-warning">Pulisci il form</button>
                </form>
            </div>
        </div>
    </section>
@endsection
