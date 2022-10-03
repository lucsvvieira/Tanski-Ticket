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

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="col-sm-7">
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Nome Completo
                </label>
                <div class="col-sm-7">
                    <input type="text" name="name" class="form-control mb-3" value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Digite sua senha
                </label>
                <div class="col-sm-7">
                    <input type="password" name="password" class="form-control mb-3">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Digite novamente sua senha
                </label>
                <div class="col-sm-7">
                    <input type="password" name="password_confirmation" class="form-control mb-3">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    E-mail
                </label>
                <div class="col-sm-7">
                    <input type="text" name="email" class="form-control mb-3" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Telefone
                </label>
                <div class="col-sm-7">
                    <input type="text" name="phone" class="form-control mb-3" value="{{ old('phone') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-5 col-form-label">
                    Avatar
                </label>
                <div class="col-sm-7">
                    <input type="file" name="avatar" class="form-control-file mb-3">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Cliente
                </label>
                <div class="col-sm-7">
                    <select class="form-control" name="client_id">
                        @foreach ($clients as $client)
                            <option value="{{$client->id}}" {{ old('client_id') == $client->id ? 'selected' : '' }}>
                                {{$client->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-7 d-flex justify-content-center">
                    <button type="submit" value="submit" class="btn btn-success btn-md">
                        Realizar Cadastro
                    </button>
                </div>
            </div>
        </div>
    </form>

    <hr>

    <div>
        <a href={{ route('users.index') }} class="btn btn-primary btn-sm">&larr; Realizar Login</a>
    </div>

@endsection
