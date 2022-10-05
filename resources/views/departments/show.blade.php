@extends('layouts.template')

@section('content')
    <h1 class="mt-5 text-center">Visualizando Departamento</h1>

    <div class="container mt-5">
        <table class="table">
            <thead class="text-center table-dark">
                <tr>
                    <th>Nome do Departamento</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center table-primary">
                    <th>{{ $department->department_name }}</th>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center p-5">
        <a href={{ route('departments.index') }} class="btn btn-primary btn-lg">
            &larr; Voltar
        </a>
    </div>
@endsection
