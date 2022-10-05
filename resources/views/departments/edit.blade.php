@extends('layouts.template')

@section('content')

    <h1 class="text-center p-5">Editando Departamento</h1>

    <hr>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <form action="{{ route('departments.update', $department->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-sm-7">
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Nome do Departamento
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="department_name" class="form-control mb-3" value="{{ $department->department_name }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-7 d-flex justify-content-center">
                        <button type="submit" value="submit" class="btn btn-success btn-md">
                            Salvar Alterações
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <hr>

    <div>
        <a href={{ route('departments.index') }} class="btn btn-primary btn-sm">
            &larr; Voltar</a>
    </div>

@endsection
