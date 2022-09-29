@extends('layouts.template')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="mt-4" action="{{ route('priorities.store') }}" method="POST">
        @csrf
            <div class="text-center">
                <label for="priority" class="col-form-label">
                    Prioridade
                </label>
                <div class="col">
                    <select id="priority">
                        <option value="low">Baixa</option>
                        <option value="medium">Média</option>
                        <option value="high">Alta</option>
                      </select>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" value="submit" class="btn btn-success btn-md">
                        Salvar
                    </button>
                </div>
            </div>
        </div>
    </form>

    <hr>

    <div class="d-flex justify-content-center">
        <a href={{ route('priorities.index') }} class="btn btn-primary btn-sm">&larr; Voltar</a>
    </div>

@endsection
