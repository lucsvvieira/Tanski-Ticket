@extends('layouts.template')

@section('content')
    <h1 class="mt-5 text-center">Visualizando Anexos de Ocorrências</h1>

    <div class="container mt-5">
        <table class="table">
            <thead class="text-center table-dark">
                <tr>
                    <th>Nome Original</th>
                    <th>Extensão</th>
                    <th>Tamanho</th>
                    <th>Nome do Arquivo</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center table-primary">
                    <td>{{ $occurrency_attachments->original_name }}</td>
                    <td>{{ $occurrency_attachments->extension }}</td>
                    <td>{{ $occurrency_attachments->size }}</td>
                    <td>{{ $occurrency_attachments->file_name }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center p-5">
        <a href={{ route('occurrency_attachments.index') }} class="btn btn-primary btn-lg">
            &larr; Voltar
        </a>
    </div>
@endsection
