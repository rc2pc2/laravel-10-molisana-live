@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $pasta->titolo }}
                            </h1>
                            <p>
                                Tipo: {{ $pasta->tipo }}
                            </p>
                            <p>
                                Cottura: {{ $pasta->cottura }}
                            </p>
                            <p>
                                Cottura: {{ $pasta->peso }}
                            </p>

                            <div class="card-image">
                                <img class="w-50" src="{{  $pasta->src }}" alt="{{ $pasta->titolo }} ">
                            </div>
                            <div class="card-body">
                                <h2>
                                    Descrizione
                                </h2>
                                <p>
                                    {{ $pasta->descrizione }}
                                </p>
                            </div>

                            <div class="actions mb-3 pt-3">
                                <a href="{{ route('guest.pastas.edit', $pasta->id) }}">
                                    <button class="btn btn-primary">
                                        Modifica questo tipo di pasta
                                    </button>
                                </a>
                            </div>

                            <form class="d-inline-block pasta-eraser"  action="{{ route('guest.pastas.destroy', $pasta) }}" method="POST" data-pasta-name="{{ $pasta['titolo'] }}">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-warning" >
                                    elimina
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




@section('script-content')
    <script>
        const form = document.querySelector('form.pasta-eraser');
        form.addEventListener('click', function(event) {
            event.preventDefault();

            const name = this.getAttribute('data-pasta-name');
            const confirmWindow = window.confirm(`Vuoi tu eliminare definitivamente ${name}?`);
            if (confirmWindow) this.submit();
        });
    </script>
@endsection