@extends('layouts.template')

@section('content')

    <h1 class="text-center p-5">Editando Usuário: {{$client->name}}</h1>

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
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-sm-7">
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Nome
                </label>
                <div class="col-sm-7">
                    <input type="text" name="name" class="form-control mb-3" value="{{$client->name}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Nome da Empresa
                </label>
                <div class="col-sm-7">
                    <input type="text" name="business_name" class="form-control mb-3" value="{{$client->business_name}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    CNPJ
                </label>
                <div class="col-sm-7">
                    <input type="text" name="cnpj" class="form-control mb-3" value="{{$client->cnpj}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Fone
                </label>
                <div class="col-sm-7">
                    <input type="text" name="phone" class="form-control mb-3" value="{{$client->phone}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Endereço
                </label>
                <div class="col-sm-7">
                    <input type="text" name="address" class="form-control mb-3" value="{{$client->address}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    E-mail
                </label>
                <div class="col-sm-7">
                    <input type="text" name="email" class="form-control mb-3" value="{{$client->email}}">
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
        <a href={{ route('clients.index') }} class="btn btn-primary btn-sm"><< Voltar</a>
    </div>
    
@endsection
