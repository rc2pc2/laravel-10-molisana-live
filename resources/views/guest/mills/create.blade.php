@extends('layouts.app')

@section('main-content')
    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Aggiungi un nuovo mulino:
                </h1>

                <form action="{{ route('guest.mills.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Nome del mulino:
                        </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="watermill" class="form-check-label">Mulino ad acqua:</label>
                        <input type="checkbox" name="watermill" id="watermill" class="form-check-inline">
                    </div>

                    <div class="mb-3">
                        <label for="region" class="form-label">Regione:</label>
                        <input type="text" name="region" id="region" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="country" class="form-label">Stato:</label>
                        <input type="text" name="country" id="country" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="size" class="form-label">Grandezza in mq:</label>
                        <input type="text" name="size" id="size" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="mills_no" class="form-label">Numero di mulini attivi:</label>
                        <input type="text" name="mills_no" id="mills_no" class="form-control">
                    </div>

                    <div class="mb-3
                        <label for="picture" class="form-label">URL immagine</label>
                        <input type="text" name="picture" id="picture" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary">Aggiungi un nuovo mulino</button>
                    <button type="reset"  class="btn btn-warning">Pulisci il form</button>
                </form>
            </div>
        </div>
    </section>
@endsection
