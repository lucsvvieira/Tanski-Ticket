@extends('layouts.template')

@section('content')

    <h1 class="text-center p-5">Editando Ocorrência</h1>

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
        <form action="{{ route('occurrences.update', $occurrency->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-sm-7">
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Descrição
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="description" class="form-control mb-3" value="{{ $occurrency->description }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Data de Abertura
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="open_date" class="form-control mb-3" value="{{ $occurrency->open_date }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Data de Fechamento
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="close_date" class="form-control mb-3" value="{{ $occurrency->close_date }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Dia Atendido
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="attendanting_day" class="form-control mb-3" value="{{ $occurrency->attendanting_day }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Aberto Por
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="opened_by" class="form-control mb-3" value="{{ $occurrency->opened_by }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Atendido Por
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="attended_by" class="form-control mb-3" value="{{ $occurrency->attended_by }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Prioridade
                    </label>
                    <div class="col-sm-7">
                        <input type="text" name="priority" class="form-control mb-3" value="{{ $occurrency->priority }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-5 col-form-label">
                        Anexos
                    </label>
                    <div class="col-sm-7">
                        <input type="file" name="attach_photos" class="form-control mb-3" value="{{ $occurrency->attach_photos }}">
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
        <a href={{ route('occurrences.index') }} class="btn btn-primary btn-sm">
            &larr; Voltar</a>
    </div>

@endsection
