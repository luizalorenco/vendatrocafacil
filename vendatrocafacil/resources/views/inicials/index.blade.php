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

li:hover h2 {
    font-size: 34px;
}

li:active{
	border-color:#088C19;
	font-size: 
}

</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div style="background-color: lightblue">
                    <div class="d-flex justify-content-between w-100">
                        <span><strong>@lang('Venda e Troca Facil')</strong></span>

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
                            <tr>
                                
                                <td bgcolor="lightblue"><a href="usuarios">@lang('Perfil')</a></td>
                                <td bgcolor="lightblue">@lang('Compras')</td>
                                <td bgcolor="lightblue"><a href="historicos">@lang('Historico')</td>
                                <td bgcolor="lightblue">@lang('Vender')</td>
                 
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
		 <li style="border: solid" >
			<h2>Livro 1</h2>
		    <img src="cabelo.jpg">
		    <p class="produto-descricao">Na tesoura ou máquina, como o cliente preferir</p>
			<p class="produto-preco">R$ 25,00</p>
</li>
         <li>
		 	<h2>Livro 2</h2>
		  <img src="barba.jpg">
		    <p class="produto-descricao">Corte e desenho profissional de barba</p>
			<p class="produto-preco">R$ 18,00</p>
			</li>
		 <li>
		 	<h2>Livro 3</h2>
		  <img src="vabelo+barba.jpg">
		    <p class="produto-descricao">Pacote completo de barba e cabelo</p>
			<p class="produto-preco">R$ 35,00</p>
			</li>
		</ul>
</ul>

<ul>
		 <li style="border: solid">
			<h2>Livro 1</h2>
		    <img src="cabelo.jpg">
		    <p class="produto-descricao">Na tesoura ou máquina, como o cliente preferir</p>
			<p class="produto-preco">R$ 25,00</p>
		 </li>
         <li>
		 	<h2>Livro 2</h2>
		  <img src="barba.jpg">
		    <p class="produto-descricao">Corte e desenho profissional de barba</p>
			<p class="produto-preco">R$ 18,00</p>
			</li>
		 <li>
		 	<h2>Livro 3</h2>
		  <img src="vabelo+barba.jpg">
		    <p class="produto-descricao">Pacote completo de barba e cabelo</p>
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