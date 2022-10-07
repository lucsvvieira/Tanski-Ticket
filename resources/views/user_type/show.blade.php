@extends('layouts.template')

@section('content')
    <h1 class="mt-5 text-center">Visualizando Tipo de Usuário</h1>

    <div class="container mt-5">
        <table class="table">
            <thead class="text-center table-dark">
                <tr>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center table-primary">
                    <th>{{ $user_type->type_name }}</th>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center p-5">
        <a href={{ route('user_types.index') }} class="btn btn-primary btn-lg">
            &larr; Voltar
        </a>
    </div>
@endsection
