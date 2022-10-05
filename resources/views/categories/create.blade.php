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


    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <h1 class="text-center p-5">Criando Categoria</h1>
            <div class="d-flex flex-column text-center">
                <label for="description" class="p-2">
                    Nome da Categoria
                </label>
                <input type="text" name="category_type" class="form-control mb-3" value="{{ old('category_type') }}">
            </div>
            <div class="mt-4 col-sm-12 d-flex justify-content-center">
                <button type="submit" value="submit" class="btn btn-success btn-md">
                    Cadastrar Categoria
                </button>
            </div>
        </div>
    </form>

    <hr>

    <div class="d-flex justify-content-center">
        <a href={{ route('categories.index') }} class="btn btn-primary btn-sm">&larr; Voltar</a>
    </div>
@endsection
