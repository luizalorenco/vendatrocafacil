@extends('livros.layout')

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
                        <span>@lang('Listagem de livros')</span>
                        <a href="{{ url('livros/create') }}" class="btn-primary btn-sm">
                            <i class="fa fa-plus"></i> @lang('Cadastrar novo livro')
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
                                <td>@lang('Nome do livro')</td>
                                <td>@lang('Editora')</td>
                                <td>@lang('Autor')</td>
                                <td>@lang('Genero')</td>
                                <td>@lang('Sinopse')</td>
                                <td>@lang('Paginas')</td>
                                <td>@lang('Ano')</td>
                                <td colspan="3" class="text-center">@lang('Ações')</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($livros as $livro)
                            <tr>
                                <td>{{$livro->id}}</td>
                                <td>{{$livro->nome}}</td>
                                <td>{{$livro->editora}}</td>
                                <td>{{$livro->autor}}</td>
                                <td>{{$livro->genero}}</td>
                                <td>{{$livro->sinopse}}</td>
                                <td>{{$livro->paginas}}</td>
                                <td>{{$livro->ano}}</td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('livros.show', $livro->id)}}"
                                        class="btn btn-info btn-sm">@lang('Abrir')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('livros.edit', $livro->id)}}"
                                        class="btn btn-primary btn-sm">@lang('Editar')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <form action="{{ route('livros.destroy', $livro->id)}}" method="post">
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