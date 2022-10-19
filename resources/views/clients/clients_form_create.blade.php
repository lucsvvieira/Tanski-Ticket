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

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf

        <div class="col-sm-7">
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Nome Completo
                </label>
                <div class="col-sm-7">
                    <input type="text" name="name" class="form-control mb-3">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Nome da Empresa
                </label>
                <div class="col-sm-7">
                    <input type="text" name="business_name" class="form-control mb-3">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    CNPJ
                </label>
                <div class="col-sm-7">
                    <input type="text" name="cnpj" class="form-control mb-3">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Fone
                </label>
                <div class="col-sm-7">
                    <input type="text" name="phone" class="form-control mb-3">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Endereço
                </label>
                <div class="col-sm-7">
                    <input type="text" name="address" class="form-control mb-3">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    E-mail
                </label>
                <div class="col-sm-7">
                    <input type="text" name="email" class="form-control mb-3">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-7 d-flex justify-content-center">
                    <button type="submit" value="submit" class="btn btn-success btn-md">
                        Cadastrar Cliente
                    </button>
                </div>
            </div>
        </div>
    </form>

    <hr>

    <div>
        <a href={{ route('clients.index') }} class="btn btn-primary btn-sm">&larr; Voltar</a>
    </div>

@endsection
