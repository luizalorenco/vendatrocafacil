@extends('usuarios.layout')

@section('title',__('Editar (CRUD Laravel)'))

@push('css')
<style>
    /* Personalizar layout*/
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span>@lang('Editar (CRUD Laravel)')</span>
                        <a href="{{ url('usuarios') }}" class="btn-info btn-sm">
                            <i class="fa fa-arrow-left"></i> @lang('Voltar')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {!! Form::open(['action' => ['UsuarioController@update',$usuario->id], 'method' => 'PUT'])!!}

                    <div class="form-group">
                        {!! Form::label(__('Nome do usuario:')) !!}
                        {!! Form::text("nome", $usuario->nome ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Senha:')) !!}
                        {!! Form::text("senha", $usuario->senha,["class"=>"form-control mmss","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Genero:')) !!}
                        {!! Form::text("genero", $usuario->genero ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Data de Nascimento:')) !!}
                        {!! Form::text("data_nasc", $usuario->data_nasc,["class"=>"form-control mmss","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('CPF:')) !!}
                        {!! Form::text("cpf", $usuario->cpf,["class"=>"form-control mmss","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Endereço:')) !!}
                        {!! Form::text("endereco", $usuario->endereco ,["class"=>"form-control","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Celular:')) !!}
                        {!! Form::text("celular", $usuario->celular,["class"=>"form-control mmss","required"=>"required"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label(__('Email:')) !!}
                        {!! Form::text("email", $usuario->email,["class"=>"form-control mmss","required"=>"required"]) !!}
                    </div>


                    <div class="well well-sm clearfix">
                        <button class="btn btn-success pull-right" title="@lang('Salvar')"
                            type="submit">@lang('Alterar')</button>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script language='JavaScript'>
    $(".mmss").focusout(function () {
        var id = $(this).attr('id');
        var vall = $(this).val();
        var regex = /[^0-9]/gm;
        const result = vall.replace(regex, ``);
        $('#' + id).val(result);
    });
</script>
@endpush