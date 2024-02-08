@extends('layouts.admin')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table p-2 m-3">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">nome</th>
                                <th scope="col">tipo</th>
                                <th scope="col">cottura</th>
                                <th scope="col">azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pastas as $pasta)
                            <tr>
                                <td>{{ $pasta['id'] }} </td>
                                <td>{{ $pasta['titolo'] }} </td>
                                <td>{{ $pasta['tipo'] }} </td>
                                <td>{{ $pasta['cottura'] }} </td>
                                <td>
                                    <button class="btn btn-sm btn-primary d-inline-block">
                                    mostra
                                    </button>
                                    <button class="btn btn-sm btn-success">
                                        modifica
                                    </button>
                                    <form class="d-inline-block pasta-eraser"  action="{{ route('admin.pastas.destroy', $pasta->id) }}" method="POST" data-pasta-name="{{ $pasta['titolo'] }}">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-warning" >
                                            elimina
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script-content')
    <script>
        const formsList = document.querySelectorAll('form.pasta-eraser');

        formsList.forEach( form => {
            form.addEventListener('click', function(event) {
                event.preventDefault();

                const name = this.getAttribute('data-pasta-name');
                const confirmWindow = window.confirm(`Vuoi tu eliminare definitivamente ${name}?`);
                if (confirmWindow) this.submit();
            });
        })
    </script>
@endsection