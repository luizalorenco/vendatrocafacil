@extends('comprass.layout')

@section('title',__('(CRUD Laravel)'))

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

                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>@lang('Produto')</td>
                                <td>@lang('Valor')</td>
                                <td>@lang('Data da Compra')</td>
                                <td>@lang('Previsão de Entrega')</td>
                    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comprass as $compras)
                            <tr>
                                <td>{{$compras->id}}</td>
                                <td>{{$compras->produto}}</td>
                                <td>{{$compras->valor}}</td>
                                <td>{{$compras->data_compra}}</td>
                                <td>{{$compras->previsão_entrega}}</td>
                           
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('comprass.show', $compras->id)}}"
                                        class="btn btn-info btn-sm">@lang('Abrir')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('comprass.edit', $compras->id)}}"
                                        class="btn btn-primary btn-sm">@lang('Editar')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <form action="{{ route('comprass.destroy', $compras->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
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