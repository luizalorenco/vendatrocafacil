@extends('usuarios.layout')

@section('title',__('(CRUD Laravel)'))

@push('css')
<style>
   .perfil-usuario {
    background: linear-gradient(#3FD0F4, transparent);
    color: #333;
}
.perfil-usuario .sombra {
    position: absolute;
    display: block;
    background: linear-gradient(transparent,rgba(0, 0, 0, .5));
    width: 100%;
    height: 50%;
    bottom: 0;
    left: 0;
}
.perfil-usuario .portada-perfil,
.perfil-usuario .sombra {
    border-radius: 0 0 20px 20px;
}
.perfil-usuario img {
    width: 100%;
}
.contenedor-perfil {
    max-width: 1024px;
    margin-left: auto;
    margin-right: auto;
}
.perfil-usuario .contenedor-perfil {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 90%;
}
.perfil-usuario .portada-perfil {
    display: block;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    height: 20rem;
    margin-bottom: .5rem;
}
.perfil-usuario .avatar-perfil {
    display: block;
    width: 230px;
    height: 230px;
    background-color: #D9DCF1;
    position: absolute;
    bottom: -65px;
    left: 4rem;
    border-radius: 50%;
    overflow: hidden;
    border: 8px solid #FFFFFF;
    box-shadow: 0 0 12px 2px rgba(0, 0, 0, .2);
}
.perfil-usuario .cambiar-foto {
    position: absolute;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background-color: rgba(0, 0, 0, .5);
    height: 57%;
    bottom: 0;
    left: 0;
    color: #fff;
    text-decoration: none;
    transform: translateY(50%);
    opacity: 0;
    transition: all ease-in 200ms;
}
.perfil-usuario .cambiar-foto i {
    margin-bottom: .5rem;
    font-size: 2rem;
}
.perfil-usuario .avatar-perfil:hover .cambiar-foto {
    transform: translateY(0);
    opacity: 1;
}
.perfil-usuario .datos-perfil {
    position: absolute;
    display: block;
    width: calc(100% - 230px - 8rem);
    right: 0;
    bottom: 0;
    color: #fff;
    text-shadow: 0 0 5px rgba(0, 0, 0, .2);
    padding-bottom: 1rem;
    padding-right: 1rem;
}
.perfil-usuario .titulo-usuario {
    font-size: 2.3rem;
    white-space: nowrap;
    margin-bottom: .5rem;
    overflow: hidden;
    text-overflow: ellipsis;
}
.perfil-usuario .bio-usuario {
    font-size: 1em;
    margin-bottom: .75rem;
}
.perfil-usuario .lista-perfil {
    list-style: none;
}
.perfil-usuario .lista-perfil li {
    display: inline-block;
    font-size: 1em;
    margin-right: 1rem;
}

.perfil-usuario .opcciones-perfil {
    display: block;
    position: absolute;
    right: 2rem;
    top: 1rem;
}
.perfil-usuario .opcciones-perfil button {
    border: 0;
    padding: 8px 20px;
    border-radius: 8px;
    background-color: rgba(0, 0, 0, .5);
    color: #fff;
    cursor: pointer;
}
.perfil-usuario .menu-perfil ul {
    display: flex;
    list-style: none;
    margin-left: calc(200px + 8rem);
    width: calc(100% - 200px - 8rem);
}
.perfil-usuario .menu-perfil ul li {
    margin-right: 1rem;
}
.perfil-usuario .menu-perfil a {
    display: block;
    text-decoration: none;
    color: inherit;
    padding: 8px 20px;
    font-weight: bold;
    border-radius: 8px;
    transition: all ease-in 100ms;
}
.perfil-usuario .menu-perfil a:hover {
    background-color: #4CB0C6;
    color: #fff;
}
.perfil-usuario .icono-perfil {
    display: none;
    margin-right: .75rem;
}
@media (max-width: 780px) {
    .perfil-usuario .contenedor-perfil {
        width: 100%;
    }
    .perfil-usuario .avatar-perfil {
        left: calc(50% - 115px)
    }
    .perfil-usuario .datos-perfil {
        bottom: 200px;
        left: 0;
        width: 100%;
        padding: 15px;
        text-align: center;
    }
    .perfil-usuario .bio-usuario {
        font-size: 1em;
        overflow:hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .perfil-usuario .titulo-usuario {
        font-size: 2.1rem;
    }
    .perfil-usuario .portada-perfil {
        height: 28rem;
    }
    .perfil-usuario .menu-perfil ul {
        flex-direction: column;
    }
    .perfil-usuario .lista-perfil {
        display: block;
    }
    .perfil-usuario .menu-perfil {
        margin-top: 2rem;
    }
    .perfil-usuario .menu-perfil ul {
        display: flex;
        list-style: none;
        margin-left: auto;
        margin-right: auto;
        padding-top: 2.5rem;
        width: 70%;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 0 12px 2px rgba(0, 0, 0, .1);
    }
    .perfil-usuario .icono-perfil {
        display: inline-block;
    }
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
                       
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <section class="perfil-usuario">
    <div class="contenedor-perfil">
        <div class="portada-perfil" style="background-image: url('http://localhost/multimedia/relleno/fondo-9.png');">
            <div class="sombra"></div>
            <div class="avatar-perfil">
                <img src="http://localhost/multimedia/relleno/img-c9.png" alt="img">
                <a href="#" class="cambiar-foto">
                    <i class="fas fa-camera"></i> 
                    <span>Trocar foto</span>
                </a>
            </div>
            <div class="datos-perfil">
                <h4 class="titulo-usuario">Usuário 1</h4>
                
                <ul class="lista-perfil">
                  
                </ul>
            </div>
            <div class="opcciones-perfil">
                <button type="">Mensagens</button>
                
            </div>
        </div>
        <div class="menu-perfil">
            <ul>
                <li><a href="#" title=""><i class="icono-perfil fas fa-bullhorn"></i>Minhas Compras</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-info-circle"></i>Meus endereços</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-grin"></i>Minhas formas de pagamento</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-camera"></i>Historico</a></li>
            </ul>
        </div>
    </div>
</section>

                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->id}}</td>
                                <td>{{$usuario->nome}}</td>
                                <td>{{$usuario->senha}}</td>
                                <td>{{$usuario->genero}}</td>
                                <td>{{$usuario->data_nasc}}</td>
                                <td>{{$usuario->cpf}}</td>
                                <td>{{$usuario->endereco}}</td>
                                <td>{{$usuario->celular}}</td>
                                <td>{{$usuario->email}}</td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('usuarios.show', $usuario->id)}}"
                                        class="btn btn-info btn-sm">@lang('Abrir')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('usuarios.edit', $usuario->id)}}"
                                        class="btn btn-primary btn-sm">@lang('Editar Conta')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <form action="{{ route('usuarios.destroy', $usuario->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Excluir Conta</button>
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