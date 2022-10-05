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


    <form action="{{ route('occurrency_attachments.store') }}" method="POST">
        @csrf
        <div>
            <h1 class="text-center p-5">Criando Anexos de Ocorrências</h1>
            <div class="d-flex flex-column text-center">
                <label for="description" class="p-2">
                    Nome Original
                </label>
                    <input type="text" name="original_name" class="form-control mb-3" value="{{ old('original_name') }}">
            </div>
            <div class="d-flex flex-column text-center">
                <label for="description" class="p-2">
                    Extensão
                </label>
                    <input type="text" name="extension" class="form-control mb-3" value="{{ old('extension') }}">
            </div>
            <div class="d-flex flex-column text-center">
                <label for="description" class="p-2">
                    Tamanho 
                </label>
                    <input type="text" name="size" class="form-control mb-3" value="{{ old('size') }}">
            </div>
            <div class="d-flex flex-column text-center">
                <label for="description" class="p-2">
                    Nome do Arquivo
                </label>
                    <input type="text" name="file_name" class="form-control mb-3" value="{{ old('file_name') }}">
            </div>
            <div class="mt-4 col-sm-12 d-flex justify-content-center">
                <button type="submit" value="submit" class="btn btn-success btn-md">
                    Cadastrar Anexo de Ocorrência
                </button>
            </div>
        </div>
    </form>

    <hr>

    <div class="d-flex justify-content-center">
        <a href={{ route('occurrency_attachments.index') }} class="btn btn-primary btn-sm">&larr; Voltar</a>
    </div>
@endsection
