<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style>
        .btn-group-sm>.btn, .btn-sm {
            padding: .1rem .5rem;
            font-size: .8rem;
            line-height: 1.5;
            border-radius: .2rem;
            color: #fff !important;
        }
        body {
            font-family: "Nunito", sans-serif;
            font-size: 0.9rem;
            background-color: lightblue;
        }
    </style>
    @stack('css')
</head>
<body>
    <div id="app">
    
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        @if (Route::has('logout'))
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apock web design</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

<style type="text/css">
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
.panel-chat-usuarios {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    background-color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    width: 370px;
    overflow: hidden;
    border-radius: 15px 15px 0 0;
}
.panel-chat-usuarios  a {
    color: inherit;
    text-decoration: none;
}
.panel-chat-usuarios .panel-chat-header {
    display: flex;
    justify-content: flex-end;
    background-color: #8555FF;
    padding: 10px 15px;
}
.botones-ajuntar .boton,
.panel-chat-usuarios .panel-chat-header .botones-chat {
    display: inline-block;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    border: 0;
    cursor: pointer;
    background-color: #6C43D5;
    color: #fff;
}
.panel-chat-usuarios .panel-chat-header .botones-chat:hover {
    background-color: #603BBE;
}
/* datos de usuario */
.panel-chat-usuarios .panel-chat-body {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
}
.panel-chat-usuarios .panel-chat-datos {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    align-items: center;
    padding: 10px;
    border-bottom: 1px solid #DADADA;
    background-color: #fff;
}
.panel-chat-usuarios .panel-chat-datos .chat-avatar {
    display: block;
    width: 50px;
    height: 50px;
    background-color: #D6D6D6;
    border-radius: 50%;
    margin-right: 1rem;
    position: relative;
}
.panel-chat-usuarios .panel-chat-datos .chat-avatar img {
    width: 100%;
    border-radius: 50%;
}
.panel-chat-usuarios .estado-usuario {
    position: absolute;
    display: block;
    width: 17px;
    height: 17px;
    background-color: #50FF65;
    border: 3px solid #fff;
    border-radius: 50%;
    z-index: 1;
    bottom: -1px;
    left: -1px;
}
.panel-chat-usuarios .panel-chat-datos h5 {
    font-size: 1rem;
    margin-bottom: 0.1rem;
}
.panel-chat-usuarios .panel-chat-datos p {
    margin-bottom: 0;
    font-size: 0.9rem;
    color: #8B8B8B;
}
/* cuerpo del chat */
.panel-chat-usuarios .panel-chat-body {
    display: block;
    padding: 15px 0;
    flex-wrap: wrap;
    height: 365px;
    overflow-y: auto;
    overflow-x: hidden;
}
/* chat */
.panel-chat-usuarios .panel-msj-der,
.panel-chat-usuarios .panel-msj-izq {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 0.5rem;
}
.panel-chat-usuarios .panel-msj-der {
    align-items: flex-end;
}
.panel-chat-usuarios .panel-msj-der .chat-cuerpo,
.panel-chat-usuarios .panel-msj-izq .chat-cuerpo {
    background-color: #96B4FF;
    width: auto;
    max-width: 85%;
    margin-left: 1rem;
    border-radius: 0 20px 20px 20px;
    padding: 10px 15px;
    position: relative;
    font-size: .9em;
}
.panel-chat-usuarios .panel-msj-der .chat-cuerpo {
    margin-left: 0;
    margin-right: 1rem;
    border-radius: 20px 0 20px 20px;
    background-color: #D4D4D4;
}
.panel-chat-usuarios .panel-msj-der .chat-cuerpo::before,
.panel-chat-usuarios .panel-msj-izq .chat-cuerpo::before {
    content: '';
    display: block;
    width: 0;
    height: 0;
    border-width: 10px;
    border-color: transparent;
    border-style: solid;
    position: absolute;
    top: 0;
}
.panel-chat-usuarios .panel-msj-izq .chat-cuerpo::before {
    left: -20px;
    border-right-color: #96B4FF;
}
.panel-chat-usuarios .panel-msj-der .chat-cuerpo::before {
    right: -20px;
    border-left-color: #D4D4D4;
}
.panel-chat-usuarios .contenedor-msj {
    font-size: 1em;
    margin-bottom: 0.5rem;
}
.panel-chat-usuarios .contenedor-msj-footer {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
}
.panel-chat-usuarios .contenedor-msj-footer .botones-footer {
    display: flex;
    list-style: none;
    font-size: 0.85rem;
    color: #fff;
}
.panel-chat-usuarios .contenedor-msj-footer .botones-footer li {
    margin-right: 1rem;
}
/* footer chat */
.panel-chat-usuarios .panel-chat-footer {
    display: block;
    padding: 15px 10px;
    background-color: #fff;
    position: relative;
    border-top: 1px solid #DADADA;
}
.panel-chat-usuarios .panel-chat-footer .texto-chat {
    display: block;
    width: 100%;
    height: 70px;
    border: 0;
    background-color: #E5E5E5;
    border-radius: 15px;
    padding: 15px;
    padding-right: 70px;
    color: #333;
}
.panel-chat-usuarios .botones-ajuntar {
    display: block;
    position: absolute;
    top: 1.5rem;
    right: 1rem;
    z-index: 1;
}
.botones-ajuntar .boton {
    background-color: #C7C7C7;
    color: #333;
}
</style>