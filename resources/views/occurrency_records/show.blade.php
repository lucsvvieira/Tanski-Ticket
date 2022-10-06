@extends('layouts.template')

@section('content')
    <h1 class="mt-5 text-center">Visualizando Registros de Ocorrências</h1>

    <div class="container mt-5">
        <table class="table">
            <thead class="text-center table-dark">
                <tr>
                    <th>Mensagem</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center table-primary">
                    <td>{{ $occurrency_records->messages }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center p-5">
        <a href={{ route('occurrency_records.index') }} class="btn btn-primary btn-lg">
            &larr; Voltar
        </a>
    </div>
@endsection
