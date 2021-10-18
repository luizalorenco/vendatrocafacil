@extends('logins.layout')

@section('title',__('(CRUD Laravel)'))

@push('css')
<style>
html {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-size-adjust: 100%;
    line-height: 1.4;
}


* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    color: #404040;
    font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
}

/*=====================================
estilos de la utilidad
Copiar esto
=====================================*/
.body-contenedor {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100vh;
    background: linear-gradient(#6DDFC3, #4458EC);
}

.contenedor-sesion {
    display: flex;
    flex-wrap: wrap;
    background-color: #fff;
    width: 90%;
    max-width: 800px;
    border-radius: 12px;
    box-shadow: 0 0 15px 2px rgba(0, 0, 0, .1);
    padding: 20px;
}
.contenedor-sesion .seccion {
    width: 50%;
}
.contenedor-sesion .seccion:first-child{
    padding-right: 45px;
    border-right: 1px solid rgba(0, 0, 0, .1575);
}
.contenedor-sesion .seccion:last-child{
    padding-left: 45px;
}

.contenedor-sesion .titulo-seccion h5 {
    font-size: 1.5em;
    font-weight: normal;
    margin-bottom: 2rem;
    margin-top: 0 !important;
}

.divisor {
    width: 0px;
    position: relative;
    display: flex;
    align-items: center;
    left: -25px;
}
.divisor .contenedor-icono {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    width: 50px;
    height: 50px;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    border-radius: 50%;
    color: #B2B2B2;
}

.form-secion {
    display: block;
}
.form-secion .form-input {
    display: flex;
    width: 100%;
    position: relative;
    margin-bottom: 1.5rem;
}
.form-secion .form-input .icono {
    position: absolute;
    right: 0;
    bottom: 4px;
    font-size: 1.3rem;
    color: #C8C8C8;
}
.form-secion .form-input input[type="password"],
.form-secion .form-input input[type="email"],
.form-secion .form-input input[type="text"] {
    width: 100%;
    border: 0;
    border-bottom: 1px solid rgba(0, 0, 0, .2);
    padding: 0 0 8px 0;
    padding-right: 40px;
}
.form-secion .form-input input[type="password"]:focus,
.form-secion .form-input input[type="email"]:focus,
.form-secion .form-input input[type="text"]:focus {
    border: 0;
    border-bottom: 1px solid #6686EE;
}
.form-secion .form-input input[type="password"]:focus ~ .icono i,
.form-secion .form-input input[type="email"]:focus ~ .icono i,
.form-secion .form-input input[type="text"]:focus ~ .icono i {
    color: #6686EE;
}
.form-secion .form-input input[type="password"]:invalid,
.form-secion .form-input input[type="email"]:invalid,
.form-secion .form-input input[type="text"]:invalid {
    color: #FF4D4D;
    box-shadow: none;
    border-bottom: 1px solid #FF4D4D;
    background-color: transparent !important;
}
.form-secion .form-input input[type="password"]:invalid ~ .icono i,
.form-secion .form-input input[type="email"]:invalid ~ .icono i,
.form-secion .form-input input[type="text"]:invalid ~ .icono i {
    color: #FF4D4D;
}
.form-secion .form-terminos {
    display: block;
    margin-bottom: 1.5rem;
}
.form-secion .form-terminos input[type="checkbox"] {
    margin-right: .5rem;
    cursor: pointer;
}
.form-secion .form-terminos a {
    text-decoration: none;
    color: #5DAFFB;
    font-weight: bold;
}
.form-secion .form-terminos a:hover {
    color: #3C7DB9;
}

.btn-form i {
    margin-right: .75rem;
}

.contenedor-sesion .btn-form {
    display: block;
    width: 100%;
    padding: 10px 15px;
    border-radius: 8px;
    border: 0;
    color: #fff;
    box-shadow: 0 0 8px rgba(0, 0, 0, .1);
    cursor: pointer;
    transition: all ease-in 100ms;
}
.contenedor-sesion .btn-form.registro {
    background-color: #5ED043;
}
.contenedor-sesion .btn-form.registro:hover {
    background-color: #53B93B;
}
.contenedor-sesion .btn-form.registro:active {
    background-color: #449730;
}

.inciar-con {
    display: block;
    margin-bottom: 2rem;
}
.inciar-con .btn-form {
    margin-bottom: 1rem;
}
.contenedor-sesion .btn-form.facebook {
    background-color: #436BD0;
}
.contenedor-sesion .btn-form.facebook:active {
    background-color: #2F54B1;
}
.contenedor-sesion .btn-form.google {
    background-color: #FF3D3D;
}
.contenedor-sesion .btn-form.google:active {
    background-color: #E52D2D;
}
.contenedor-sesion .btn-form.iniciar {
    background-color: #282835;
}
.contenedor-sesion .btn-form.iniciar:active {
    background-color: #1D1D25;
}

.carta-seccion {
    display: block;
    padding: 15px;
    font-size: .9em;
    margin-top: 1.5rem;
    color: #fff;
}
.carta-seccion.peligro {
    background-color: #FF3D3D;
}
.carta-seccion.alerta {
    background-color: #FFB43D;
}
.carta-seccion.acierto {
    background-color: #56CF3E;
}

@media (max-width: 780px) {
    .body-contenedor {
        height: auto;
        padding-top: 3rem;
        padding-bottom: 3rem;
    }
    .contenedor-sesion {
        padding-left: 25px;
        padding-right: 25px;
    }
    .contenedor-sesion .seccion {
        width: 100%;
        border: 0 !important;
        padding: 0 !important;
    }
    .divisor {
        width: 100%;
        height: 0;
        justify-content: center;
        margin-top: 3.5rem;
        margin-bottom: 3rem;
        border-bottom: 1px solid rgba(0, 0, 0, .1575);
        left: 0;
    }
    .contenedor-sesion .seccion:first-child {
        order: 1;
    }
    .contenedor-sesion .seccion:last-child {
        order: -2;
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
                    <div class="body-contenedor">
    <div class="contenedor-sesion">
        <div class="seccion">
            <div class="titulo-seccion">
                <h5>Registrar</h5>
            </div>
            <form autocomplete="off" class="form-secion" action="#" method="post" accept-charset="utf-8">
                <div class="form-input">
                    <input type="text" placeholder="Nome" pattern="[A-Za-z0-9 ]{1,30}">
                    <div class="icono">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="form-input">
                    <input type="email" placeholder="Email">
                    <div class="icono">
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
                <div class="form-input">
                    <input type="password" placeholder="Senha" minlength="8">
                    <div class="icono">
                        <i class="fas fa-unlock"></i>
                    </div>
                </div>
                <div class="form-input">
                    <input type="password" placeholder="Confirmar senha"  minlength="8">
                    <div class="icono">
                        <i class="fas fa-unlock"></i>
                    </div>
                </div>
                <div class="form-terminos">
                    <input type="checkbox" id="acepto" value="">
                    <span>
                        Aceitar os
                        <a href="#" title="">termos</a> e
                        <a href="#" title="">condições</a>
                    </span>
                </div>
                <div class="form-boton">
                    <button type="submit" class="btn-form registro">
                        Registrar
                    </button>
                </div>
            </form>
            <!-- cambia el color de la carta con acierto, alerta y peligro -->
            <!-- <div class="carta-seccion acierto">
                El login o contraseña es incorrecto
            </div> -->
        </div>
        <div class="divisor">
            <div class="contenedor-icono">
                <i class="far fa-address-card"></i>
            </div>
        </div>
        <div class="seccion">
            <div class="titulo-seccion">
                <h5>Entrar</h5>
            </div>
            <div class="inciar-con">
                <div class="form-boton">
                    <button type="submit" class="btn-form facebook">
                        
                        Facebook
                    </button>
                </div>
                <div class="form-boton">
                    <button type="submit" class="btn-form google">
                        
                        Google
                    </button>
                </div>
            </div>
            <form class="form-secion" action="#" method="post" accept-charset="utf-8">
                <div class="form-input">
                    <input type="email" placeholder="Email">
                    <div class="icono">
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
                <div class="form-input">
                    <input type="password" placeholder="Senha" minlength="8">
                    <div class="icono">
                        <i class="fas fa-unlock"></i>
                    </div>
                </div>
                <div class="form-boton">
                    <button type="submit" class="btn-form iniciar">
                        <a href="http://127.0.0.1:8000/inicials">
                        Iniciar
</a>
                    </button>
                </div>
<p></p>
                <div class="form-boton">
                    <button type="submit" class="btn-form iniciar">
                        Esqueci a Senha
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


                        <tbody>
                            @foreach($logins as $login)
                            <tr>
                                <td>{{$login->id}}</td>
                                <td>{{$login->nome}}</td>
                                <td>{{$login->email}}</td>
                                <td>{{$login->senha}}</td>
                                <td>{{$login->confirmar}}</td>
        
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('logins.show', $login->id)}}"
                                        class="btn btn-info btn-sm">@lang('Abrir')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('logins.edit', $login->id)}}"
                                        class="btn btn-primary btn-sm">@lang('Editar Conta')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <form action="{{ route('logins.destroy', $login->id)}}" method="post">
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