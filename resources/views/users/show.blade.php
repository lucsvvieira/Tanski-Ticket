@extends('layouts.template')

@section('content')
    <h1 class="mt-5 text-center">Visualizando Usuário: {{ $user->name }}</h1>

    <div class="container mt-5">
        <table class="table">
            <thead class="text-center table-dark">
                <tr>
                    <th>Nome Completo</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center table-primary">
                    <th>{{ $user->name }}</th>
                    <td>{{ $user->email }}</td>
                    <td><img class="rounded-circle" src="{{ $user->foto }}" alt="Foto" width="50px" height="50px"></td>
                    <td>{{ $user->phone }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center p-5">
        <a href={{ route('users.index') }} class="btn btn-primary btn-lg">
            &larr; Voltar
        </a>
    </div>
@endsection
