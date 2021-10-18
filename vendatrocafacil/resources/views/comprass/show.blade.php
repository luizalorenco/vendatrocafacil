@extends('comprass.layout')

@section('title',__($compras->nome . ': CRUD Laravel'))

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
                        <span><span class="text-info">{{$compras
                        ->nome}}</span>: (@lang('CRUD Laravel'))</span>
                        <a href="{{ url('compras
                        s') }}" class="btn-info btn-sm">
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
                          <th align="left">{{$compras
                            ->id}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Produto')</strong>:</th>
                            <th align="left">{{$compras
                            ->produto}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Valor')</strong>:</th>
                            <th align="left">{{$compras
                            ->valor}}</th>
                          </tr>
                          <tr>
                          <tr>
                            <th align="left"><strong>@lang('Data da Compra')</strong>:</th>
                            <th align="left">{{$compras
                            ->data_compra}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Previsão de Entrega')</strong>:</th>
                            <th align="left">{{$compras
                            ->previsao_entrega}}</th>
                          </tr>
                          
                          <tr>
                            <th align="left"><strong>@lang('Adicionado')</strong>:</th>
                            <th align="left">{{$compras
                            ->created_at}}</th>
                          </tr>
                          <tr>
                              <th align="left"><strong>@lang('Atualizado')</strong>:</th>
                              <th align="left">{{$compras
                                ->updated_at}}</th>
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