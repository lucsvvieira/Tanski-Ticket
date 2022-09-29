@extends('layouts.template')

@section('content')

    <h1 class="text-center p-5">Editando Usuário: {{ $user->name }}</h1>

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
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-sm-7">
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Nome
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="name" class="form-control mb-3" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Password
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="password" class="form-control mb-3" value="{{ $user->password }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Avatar
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="avatar" class="form-control mb-3" value="{{ $user->avatar }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        E-mail
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="email" class="form-control mb-3" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Telefone
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="phone" class="form-control mb-3" value="{{ $user->phone }}">
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
        <a href={{ route('users.index') }} class="btn btn-primary btn-sm">
            &larr; Voltar</a>
    </div>

@endsection