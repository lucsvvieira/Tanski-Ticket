@extends('layouts.template')

@section('content')
    <h1 class="mt-5 text-center">Visualizando Ocorrência</h1>

    <div class="container mt-5">
        <table class="table">
            <thead class="text-center table-dark">
                <tr>
                    <th>Nome da Ocorrência</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center table-primary">
                    <td>{{ $occurrences->status }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center p-5">
        <a href={{ route('occurrency_status.index') }} class="btn btn-primary btn-lg">
            &larr; Voltar
        </a>
    </div>
@endsection
