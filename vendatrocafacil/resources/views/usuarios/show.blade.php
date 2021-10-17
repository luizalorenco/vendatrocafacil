@extends('usuarios.layout')

@section('title',__($usuario->nome . ': CRUD Laravel'))

@push('css')
<style>
    table{
        font-family: Verdana,sans-serif;
        border: 1px solid #ccc;
        margin: 20px 0;
    }
table th{
    padding:10px;
    font-weight: normal;
}
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span><span class="text-info">{{$usuario->nome}}</span>: (@lang('CRUD Laravel'))</span>
                        <a href="{{ url('usuarios') }}" class="btn-info btn-sm">
                            <i class="fa fa-arrow-left"></i> @lang('Voltar')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif


                    <table class="w3-table-all notranslate" width="100%" border="1">
                        <tbody>
                        <tr>
                          <th align="left"><strong>ID:</strong></th>
                          <th align="left">{{$usuario->id}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Nome do usuario')</strong>:</th>
                            <th align="left">{{$usuario->nome}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Senha')</strong>:</th>
                            <th align="left">{{$usuario->senha}}</th>
                          </tr>
                          <tr>
                          <tr>
                            <th align="left"><strong>@lang('Genero')</strong>:</th>
                            <th align="left">{{$usuario->genero}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Data de Nascimento')</strong>:</th>
                            <th align="left">{{$usuario->data_nasc}}</th>
                          </tr>
                          <tr>
                          <tr>
                            <th align="left"><strong>@lang('CPF')</strong>:</th>
                            <th align="left">{{$usuario->cpf}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Endereço')</strong>:</th>
                            <th align="left">{{$usuario->endereco}}</th>
                          </tr>
                          <tr>
                          <tr>
                            <th align="left"><strong>@lang('Celular')</strong>:</th>
                            <th align="left">{{$usuario->celular}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Email')</strong>:</th>
                            <th align="left">{{$usuario->email}}</th>
                          </tr>
                          <tr>
                            <th align="left"><strong>@lang('Adicionado')</strong>:</th>
                            <th align="left">{{$usuario->created_at}}</th>
                          </tr>
                          <tr>
                              <th align="left"><strong>@lang('Atualizado')</strong>:</th>
                              <th align="left">{{$usuario->updated_at}}</th>
                          </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    // Script personalizado
</script>
@endpush