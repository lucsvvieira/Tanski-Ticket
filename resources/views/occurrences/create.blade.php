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
                    <input type="date" name="open_date" class="form-control mb-3">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Data de Fechamento
                </label>
                <div class="col-sm-7">
                    <input type="date" name="close_date" class="form-control mb-3">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Dia Atendido
                </label>
                <div class="col-sm-7">
                    <input type="date" name="attendanting_day" class="form-control mb-3"
                        value="{{ old('attendanting_day') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-5 col-form-label">
                    Aberto Por:
                </label>
                <div class="col-sm-7">
                    <select class="form-control mb-3" name="user_client_id">
                        @foreach ($user as $u)
                            <option value="{{ $u->id }}" {{ old('user_id') == $u->id ? 'selected' : '' }}>
                                {{ $u->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-5 col-form-label">
                    Atendido Por:
                </label>
                <div class="col-sm-7">
                    <select class="form-control mb-3" name="user_attendant_id">
                        @foreach ($user as $u)
                            <option value="{{ $u->id }}" {{ old('user_id') == $u->id ? 'selected' : '' }}>
                                {{ $u->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-5 col-form-label">
                    Prioridade
                </label>
                <div class="col-sm-7">
                    <select class="form-control mb-3" name="priority_id">
                        @foreach ($priority as $p)
                            <option value="{{ $p->id }}" {{ old('priority_id') == $p->id ? 'selected' : '' }}>
                                {{ $p->name }}
                            </option>
                        @endforeach
                    </select>
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
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Categoria
                </label>
                <select class="form-control mb-3" name="category_id">
                    @foreach ($category as $c)
                        <option value="{{ $c->id }}" {{ old('category_id') == $c->id ? 'selected' : '' }}>
                            {{ $c->category_type }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Departamento
                </label>
                <select class="form-control mb-3" name="department_id">
                    @foreach ($department as $d)
                        <option value="{{ $d->id }}" {{ old('department_id') == $d->id ? 'selected' : '' }}>
                            {{ $d->department_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Status de Ocorrência
                </label>
                <select class="form-control mb-3" name="occurrency_status_id">
                    @foreach ($occurrency_status as $o)
                        <option value="{{ $o->id }}" {{ old('occurrency_status_id') == $o->id ? 'selected' : '' }}>
                            {{ $o->status }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-5 col-form-label">
                    Sla
                </label>
                <select class="form-control mb-3" name="sla_id">
                    @foreach ($sla as $s)
                        <option value="{{ $s->id }}" {{ old('sla_id') == $s->id ? 'selected' : '' }}>
                            {{ $s->quality_service }}
                        </option>
                    @endforeach
                </select>
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
