@extends('layouts.template')

@section('content')
    <h1 class="mt-5 text-center">Visualizando Usuário: {{ $client->name }}</h1>

    <div class="container mt-5">
        <table class="table">
            <thead class="text-center table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Nome da Empresa</th>
                    <th>CNPJ</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center table-primary">
                    <th>{{ $client->name }}</th>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->business_name }}</td>
                    <td>{{ $client->cnpj }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->address }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center p-5">
        <a href={{ route('clients.index') }} class="btn btn-primary btn-lg">
            &larr; Voltar
        </a>
    </div>
@endsection
