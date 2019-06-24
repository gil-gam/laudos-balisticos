@extends('new_layout.component')
@section('page')

    <div class="col-8">
        <h4>Cadastrar Usuário</h4>
    </div>
    <hr>
    {!! Form::open(['route' => 'register']) !!}
    <div class="col-lg-12">

        <div class="form-group row">
            @include('shared.label', ['for_label' => 'nome', 'label' => 'Nome'])
            @include('shared.input',
                ['id' => 'nome', 'type' => 'text', 'name' => 'nome'])
        </div>

        <div class="form-group row">
            @include('shared.label', ['for_label' => 'cargo_id', 'label' => 'Cargo'])
            @include('shared.select_with_id',
                ['id' => 'cargo_id', 'name' => 'cargo_id', 'dados' => $cargos,
                'value' => ""])
        </div>

        <div class="form-group row">
            @include('shared.label', ['for_label' => 'secao_id', 'label' => 'Seção'])
            @include('shared.select_with_id',
                ['id' => 'secao_id', 'name' => 'secao_id', 'dados' => $secoes,
                'value' => ""])
        </div>

        <div class="form-group row">
            @include('shared.label', ['for_label' => 'email', 'label' => 'Email'])

            @include('shared.input',
            ['id' => 'email', 'type' => 'email', 'name' => 'email'])
        </div>

        <div class="form-group row">
            @include('shared.label', ['for_label' => 'password', 'label' => 'Senha'])
            @include('shared.input',
            ['id' => 'senha', 'type' => 'password', 'name' => 'password'])
        </div>

        <div class="form-group row">
            @include('shared.label', ['for_label' => 'confirmacao_senha', 'label' => 'Confirmar Senha'])
            @include('shared.input',
        ['id' => 'confirmacao_senha', 'type' => 'password', 'name' => 'confirmacao_senha'])
        </div>

        <div class="col-lg-10 float-right">
            <a class="btn btn-secondary" href="{{ route('users.index') }}">Voltar</a>
            <button class="btn btn-success" type="submit">Cadastrar</button>
            {{ Form::close() }}
        </div>
    </div>
@endsection
