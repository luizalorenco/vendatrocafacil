@extends('livros.layout')

@section('title',__($livro->nome . ': CRUD Laravel'))

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
                        <span><span class="text-info">{{$livro->nome}}</span>: (@lang('CRUD Laravel'))</span>
                        <a href="{{ url('livros') }}" class="btn-info btn-sm">
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
                          <th align="left">{{$livro->id}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Nome do livro')</strong>:</th>
                            <th align="left">{{$livro->nome}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Editora')</strong>:</th>
                            <th align="left">{{$livro->editora}}</th>
                          </tr>
                          <tr>
                          <tr>
                            <th align="left"><strong>@lang('Autor')</strong>:</th>
                            <th align="left">{{$livro->autor}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Genero')</strong>:</th>
                            <th align="left">{{$livro->genero}}</th>
                          </tr>
                          <tr>
                          <tr>
                            <th align="left"><strong>@lang('Sinopse')</strong>:</th>
                            <th align="left">{{$livro->sinopse}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Paginas')</strong>:</th>
                            <th align="left">{{$livro->paginas}}</th>
                          </tr>
                          <tr>
                          <tr>
                            <th align="left"><strong>@lang('Ano')</strong>:</th>
                            <th align="left">{{$livro->ano}}</th>
                        </tr>

                          <tr>
                            <th align="left"><strong>@lang('Adicionado')</strong>:</th>
                            <th align="left">{{$livro->created_at}}</th>
                          </tr>
                          <tr>
                              <th align="left"><strong>@lang('Atualizado')</strong>:</th>
                              <th align="left">{{$livro->updated_at}}</th>
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