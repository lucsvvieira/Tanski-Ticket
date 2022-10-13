@extends('layouts.template')

@section('content')

<hr />

<h1 class="p-5 text-center">Listagem de Anexos de Ocorrências:</h1>

<table class="table">
    <thead class="table-dark">
        <tr class="text-center">
            <th>Descrição</th>
            <th>Data de Abertura</th>
            <th>Data de Fechamento</th>
            <th>Dia Atendido</th>
            <th>Aberto por:</th>
            <th>Atendido por:</th>
            <th>Prioridade</th>
            <th>Anexos</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($occurrency as $o)
            <tr class="text-center">
                <th>{{ $o->description }}</th>
                <th>{{ $o->open_date }}</th>
                <th>{{ $o->close_date }}</th>
                <th>{{ $o->attendanting_day }}</th>
                <th>{{ $o->opened_by }}</th>
                <th>{{ $o->attended_by }}</th>
                <th>{{ $o->priority }}</th>
                <td>    
                    <img class="rounded-circle" src="{{ $o->foto }}" alt="Foto" width="100px" height="100px">
                </td>
                <td><a href={{ route('occurrences.edit', $o->id) }} class="btn btn-success btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </a></td>
                <td>
                    <form action="{{ route('occurrences.destroy', $o->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                            </svg>
                        </button>
                    </form>
                </td>
                <td><a href={{ route('occurrences.show', $o->id) }} class="btn btn-primary btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center mt-4">
    <a href={{ route('occurrences.create') }} class="btn btn-success">Cadastrar Ocorrência</a>
</div>

@endsection
