@extends('layouts.template')

@section('content')

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


    <form action="{{ route('priorities.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <h1 class="text-center p-5">Criando Prioridades</h1>

        <div class="d-flex justify-content-center">
            <div class="col-sm-7">
                <label for="description" class="col-sm-5 col-form-label">
                    Nome da Prioridade
                </label>
                <div class="col-sm-7">
                    <input type="text" name="name" class="form-control mb-3" value="{{ old('name') }}">
                </div>
                <label for="description" class="col-sm-5 col-form-label">
                    Contagem da Prioridade
                </label>
                <div class="col-sm-7">
                    <input type="text" name="priority_count" class="form-control mb-3" value="{{ old('priority_count') }}">
                </div>
            </div>
        </div>

        <div class="mt-4 col-sm-7 d-flex justify-content-center">
            <button type="submit" value="submit" class="btn btn-success btn-md">
                Cadastrar Prioridade
            </button>
        </div>

    </form>

    <hr>

    <div class="d-flex justify-content-center">
        <a href={{ route('priorities.index') }} class="btn btn-primary btn-sm">&larr; Voltar</a>
    </div>
@endsection
