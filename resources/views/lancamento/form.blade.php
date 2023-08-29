@extends('layouts.base')
@section('content')
    <h1>FORM</h1>
    <form action="" method="post" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-md-1">
            <label for="id_tipo" class="form-label">Tipo*</label>
            <select id="id_tipo" class="form-select" required>
                <option>Escolha...</option>
                <option value="1">Entrada</option>
                <option value="2">Saída</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="id_centro_custo" class="form-label">Centro de Custo*</label>
            <select id="id_centro_custo" class="form-select" required>
                <option value="">Escolha...</option>
                <option value="">...</option>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label" for="valor">Valor*</label>
            <input class="form-control"
            type="number" id="valor" name="valor"
            value=""
            required>
        </div>
        <div class="col-md-4">
            <label class="form-label" for="descricao">Descrição*</label>
            <input class="form-control"
            type="text" id="descricao" name="descricao"
            value=""
            required>
        </div>
        <div class="col-md-2 offset-md-9">
            <input class="btn btn-primary" type="submit"
        value=" Cadastrar  Atualizar">
        </div>


    </form>
@endsection
@section('scripts')
    @parent
@endsection
