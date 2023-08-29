@extends('layouts.base')
@section('content')
    <h1>INDEX</h1>

    {{-- alerts --}}
    @include('layouts.partials.alerts')
    {{-- /alerts --}}

    <div class="table-responsive"> Centro de Custos
        <table class="table table-striped  table-hover ">
            <thead>
                <caption>LISTA DE</caption>
                <tr>
                    <th class="col-2">#</th>
                    <th>Centro de Custo</th>
                    <th>Total de Lançamentos</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($centroCustos as $centro )

                <tr>
                    <td scope="row" >
                        <div class="flex-column">
                            {{-- ver --}}
                            <a class="btn btn-success" href="#">
                                <i class="bi bi-eye"></i>
                            </a>
                            {{-- editar --}}
                            <a class="btn btn-dark" href="#">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            {{-- excluir --}}
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalExcluir" data-identificacao="" data-url="">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                    <td>
                        {{$centro->centro->custo }}
                    </td>
                    <td>
                        {{ $centro->lancamentos()->count() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

{{-- Modal Excluir --}}
@include('layouts.partials.modalExcluir')
{{-- /Modal Excluir --}}
@endsection
@section('scripts')
@parent

@endsection
