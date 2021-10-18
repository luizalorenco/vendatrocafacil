@extends('inicials.layout')

@section('title',__('(Venda e Troca Facil)'))

@push('css')
<style>
 li{
        display:inline-block;      
	text-align: center;
	width: 480px;
	vertical-align: top;
	background: lightgreen;
	margin: 0 1.5px;
	padding: 30px 20px;
	box-sizing: border-box;
    border: 2px solid #000000;
    }

    
  li:hover{
    color: #C78C19;
}

.prod li:hover h2 {
    font-size: 34px;
}

.prod li:active{
	border-color:#088C19;
	font-size: 
}

.produto-descricao{
	font-size: 18px;
}

.produto-preco{
	font-size: 22px;
	font-weight: bold;
	margin: 10px 0 0;
	margin-top: 10px;
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

                        <span><strong><font size="5" color="blue">@lang('Venda e Troca Facil')</font></strong></span>

                        <div id="divBusca">
  
  <input type="text" id="txtBusca" placeholder="Buscar..."/>
  <button id="btnBusca">Buscar</button>
</div>
                    </div>
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
                        <tr  style="border: dashed">


<td bgcolor="lightblue"><a href="usuarios"><strong><font size="3" color="blue">@lang('Perfil')</font></strong></a></td>
<td bgcolor="lightblue"><a href="comprass"><strong><font size="3" color="blue">@lang('Compras')</font></strong></td>
<td bgcolor="lightblue"><a href="historicos"><strong><font size="3" color="blue">@lang('Historico')</font></strong></td>
<td bgcolor="lightblue"><a href="http://127.0.0.1:8000/livros/create"><strong><font size="3" color="blue">@lang('Vender ou Trocar')</font></strong></a></td> 

</tr>
                        </thead>





                        <tbody>
                            @foreach($inicials as $inicial)
                            <tr>
                                <td>{{$inicial->id}}</td>
                                <td>{{$inicial->perfil}}</td>
                                <td>{{$inicial->compras}}</td>
                                <td>{{$inicial->historico}}</td>
                                <td>{{$inicial->vender}}</td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('inicials.show', $inicial->id)}}"
                                        class="btn btn-info btn-sm">@lang('Abrir')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('inicials.edit', $inicial->id)}}"
                                        class="btn btn-primary btn-sm">@lang('Editar')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <form action="{{ route('inicials.destroy', $inicial->id)}}" method="post">
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

<main>
		<ul>
		 <li class="prod" style="border: solid" >
			<h2>Livro 1</h2>
		    <img src="">
		    <p class="produto-descricao">Livro 1, novo</p>
			<p class="produto-preco">R$ 25,00</p>
</li>
         <li class="prod" style="border: solid">
		 	<h2>Livro 2</h2>
		  <img src="">
		    <p class="produto-descricao">Livro 2, usado, em perfeitas condições</p>
			<p class="produto-preco">Troca</p>
			</li>
		 <li class="prod" style="border: solid">
		 	<h2>Livro 3</h2>
		  <img src="">
		    <p class="produto-descricao">Livro 3, usado, pequenas marcas de uso</p>
			<p class="produto-preco">Troca</p>
			</li>
		</ul>
</ul>

<ul>
		 <li  class="prod" style="border: solid">
			<h2>Livro 4</h2>
		    <img src="">
		    <p class="produto-descricao">Livro 4, usado, ótimas condiçoes</p>
			<p class="produto-preco">Troca</p>
		 </li>
         <li  class="prod" style="border: solid">
		 	<h2>Livro 5</h2>
		  <img src="">
		    <p class="produto-descricao">Livro 5, usado</p>
			<p class="produto-preco">R$ 18,00</p>
			</li>
		 <li  class="prod" style="border: solid">
		 	<h2>Livro 5</h2>
		  <img src="">
		    <p class="produto-descricao">Livro 5, novo</p>
			<p class="produto-preco">R$ 35,00</p>
			</li>
		</ul>
</ul>



</main>

@endsection

@push('js')
<script>
    // Script personalizado
</script>
@endpush