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
                                    <button class="btn btn-sm btn-warning">
                                        modifica
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        elimina
                                        </button>
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
