@extends('layouts.base')
@section('content')
    <h1>FORM</h1>
    <form action="" method="post" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="centro_custo" class="form-label">Centro de Custo*</label>
            <input class="form-control"
            type="text" id="centro_custo" name="centro_custo"
            value=""
            required>
        </div>

        <div class="col-md-2">
            <input class="btn btn-primary" type="submit"
        value=" Cadastrar  Atualizar">
        </div>


    </form>
@endsection
@section('scripts')
    @parent
@endsection
