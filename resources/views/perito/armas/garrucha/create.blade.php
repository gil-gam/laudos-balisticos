@extends('layout.component')
@section('page')
    <div class="col-8">
        <h4>Cadastro de Garrucha</h4>
    </div>
    <hr>
    @include('perito.armas.garrucha.form', ['acao' => 'Cadastrar'])
@endsection