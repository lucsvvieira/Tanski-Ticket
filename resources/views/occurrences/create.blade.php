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
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('occurrences.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="col-sm-7">
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Descrição
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="description" class="form-control mb-3" value="{{ old('description') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Data de Abertura
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="open_date" class="form-control mb-3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Data de Fechamento
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="close_date" class="form-control mb-3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Dia Atendido
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="attendanting_day" class="form-control mb-3" value="{{ old('attendanting_day') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Aperto Por:
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="opened_by" class="form-control mb-3" value="{{ old('opened_by') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-5 col-form-label">
                        Atendido Por:
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="attended_by" class="form-control mb-3" value="{{ old('attended_by') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Prioridade
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="priority" class="form-control mb-3" value="{{ old('priority') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Anexar Fotos
                    </label>
                    <div class="col-sm-7">
                        <input type="file" name="attach_photos" class="form-control mb-3" value="{{ old('attach_photos') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-7 d-flex justify-content-center">
                        <button type="submit" value="submit" class="btn btn-success btn-md">
                            Cadastrar Ocorrência
                        </button>
                    </div>
                </div>
            </div>
        </form>
    
        <hr>
    
        <div>
            <a href={{ route('occurrences.index') }} class="btn btn-primary btn-sm">&larr; Realizar Login</a>
        </div>
    
    @endsection