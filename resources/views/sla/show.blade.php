@extends('layouts.template')

@section('content')
    <h1 class="mt-5 text-center">Visualizando Sla</h1>

    <div class="container mt-5">
        <table class="table">
            <thead class="text-center table-dark">
                <tr>
                    <th>Qualidade do Serviço</th>
                    <th>Velocidade do Serviço</th>
                    <th>Eficiência do Serviço</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center table-primary">
                    <th>{{ $sla->quality_service }}</th>
                    <td>{{ $sla->speed_service }}</td>
                    <td>{{ $sla->service_efficiency }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center p-5">
        <a href={{ route('sla.index') }} class="btn btn-primary btn-lg">
            &larr; Voltar
        </a>
    </div>
@endsection
