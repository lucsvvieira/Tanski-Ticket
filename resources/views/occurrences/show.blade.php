@extends('layouts.template')

@section('content')
    <h1 class="mt-5 text-center">Visualizando Ocorrência</h1>

    <div class="container mt-5">
        <table class="table">
            <thead class="text-center table-dark">
                <tr>
                    <th>Descrição</th>
                    <th>Data de Abertura</th>
                    <th>Data de Fechamento</th>
                    <th>Dia Atendido</th>
                    <th>Aberto Por</th>
                    <th>Atendido Por</th>
                    <th>Prioridade</th>
                    <th>Anexos</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center table-primary">
                    <th>{{ $occurrency->description }}</th>
                    <th>{{ $occurrency->open_date }}</th>
                    <th>{{ $occurrency->close_date }}</th>
                    <th>{{ $occurrency->attendanting_day }}</th>
                    <th>{{ $occurrency->opened_by }}</th>
                    <th>{{ $occurrency->attended_by }}</th>
                    <th>{{ $occurrency->priority }}</th>
                    <th>{{ $occurrency->attach_photos }}</th>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center p-5">
        <a href={{ route('occurrences.index') }} class="btn btn-primary btn-lg">
            &larr; Voltar
        </a>
    </div>
@endsection
