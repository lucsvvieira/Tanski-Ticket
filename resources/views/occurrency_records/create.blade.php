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


    <form action="{{ route('occurrency_records.store') }}" method="POST">
        @csrf
        <div>
            <h1 class="text-center p-5">Criando Anexos de Ocorrências</h1>
            <div class="d-flex flex-column text-center">
                <label for="description" class="p-2">
                    Mensagem
                </label>
                    <input type="text" name="messages" class="form-control mb-3" value="{{ old('messages') }}">
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Usuário
                </label>
                <div class="col-sm-7">
                    <select class="form-control" name="user_id">
                        @foreach ($users as $user)
                            <option value="{{$user->id}}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                {{$user->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mt-4 col-sm-12 d-flex justify-content-center">
                <button type="submit" value="submit" class="btn btn-success btn-md">
                    Cadastrar Registro de Ocorrência
                </button>
            </div>
        </div>
    </form>

    <hr>

    <div class="d-flex justify-content-center">
        <a href={{ route('occurrency_records.index') }} class="btn btn-primary btn-sm">&larr; Voltar</a>
    </div>
@endsection
