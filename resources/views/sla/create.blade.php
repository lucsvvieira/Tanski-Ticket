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


    <form action="{{ route('sla.store') }}" method="POST">
        @csrf
        <div>
            <h1 class="text-center p-5">Criando Sla</h1>
            <div class="d-flex flex-column text-center">
                <label for="description" class="p-2">
                    Qualidade do Serviço
                </label>
                <input type="text" name="quality_service" class="form-control mb-3" value="{{ old('quality_service') }}">
                <label for="description" class="p-2">
                    Velocidade do Serviço
                </label>
                <input type="text" name="speed_service" class="form-control mb-3" value="{{ old('speed_service') }}">
                <label for="description" class="p-2">
                    Eficiência do Serviço
                </label>
                <input type="text" name="service_efficiency" class="form-control mb-3" value="{{ old('service_efficiency') }}">
            </div>
            <div class="mt-4 col-sm-12 d-flex justify-content-center">
                <button type="submit" value="submit" class="btn btn-success btn-md">
                    Cadastrar Sla
                </button>
            </div>
        </div>
    </form>

    <hr>

    <div class="d-flex justify-content-center">
        <a href={{ route('sla.index') }} class="btn btn-primary btn-sm">&larr; Voltar</a>
    </div>
@endsection
