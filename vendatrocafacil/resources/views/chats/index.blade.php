@extends('chats.layout')

@section('title',__('(CRUD Laravel)'))

@push('css')
<style>
    /* Personalizar layout*/
</style>
@endpush

<div class="panel-chat-usuarios">
    <div class="panel-chat-header">
        <div class="panel-chat-botones">
            <button class="botones-chat" type="button">
                <i class="fas fa-angle-down"></i>
            </button>
            <button class="botones-chat" type="button">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="panel-chat-datos">
        <div class="chat-avatar">
            <img src="https://picsum.photos/200/200">
            <span class="estado-usuario"></span>
        </div>
        <div class="datos-usuario">
            <h5>Anna Julia.</h5>
            <p>São Paulo</p>
        </div>
    </div>
    <div class="panel-chat-body">
        <!-- mensaje -->
        <div class="panel-msj-izq">
            <div class="chat-cuerpo">
                <div class="contenedor-msj">
                    Boa tarde, gostaria de trocar com você esse livro aqui:
                </div>
                <div class="contenedor-msj-footer">
                    <ul class="botones-footer">
                        <li>
                            <i class="fas fa-eye"></i>
                        </li>
                        <li>visto a 3 min</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- mensaje -->
        <div class="panel-msj-izq">
            <div class="chat-cuerpo">
                <div class="contenedor-msj">
                    P.S eu te amo de John  da autora: Cecelia Ahern 
                </div>
                <div class="contenedor-msj-footer">
                    <ul class="botones-footer">
                        <li>
                            <i class="fas fa-eye"></i>
                        </li>
                        <li>visto a 4 min</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- mensaje -->
        <div class="panel-msj-der">
            <div class="chat-cuerpo">
                <div class="contenedor-msj">
                    Sim, tenho varios livros de varios autores, qual genero gosta?
                </div>
                <div class="contenedor-msj-footer">
                    <ul class="botones-footer">
                        <li>
                            <i class="fas fa-eye"></i>
                        </li>
                        <li>visto a 5 min</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- mensaje -->
        <div class="panel-msj-izq">
            <div class="chat-cuerpo">
                <div class="contenedor-msj">
                   Romance!
                </div>
                <div class="contenedor-msj-footer">
                    <ul class="botones-footer">
                        <li>
                            <i class="fas fa-eye-slash"></i>
                        </li>
                        <li>visto a 1 dia</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="panel-chat-footer">
        <textarea class="texto-chat" name=""></textarea>
        <div class="botones-ajuntar">
            <button class="boton" type="">
                <i class="fas fa-share"></i>
            </button>
            <button class="boton" type="">
                <i class="fas fa-file-upload"></i>
            </button>
        </div>
    </div>
</div>
<!--====  End of html  ====-->

<!--=============================
redes sociales fijadas en pantalla
No es necesario que copies esto!
==============================-->
<style>
.mensaje a {
    color: inherit;
    margin-right: .5rem;
    display: inline-block;
}
.mensaje a:hover {
    color: #309B76;
    transform: scale(1.4)
}
</style>
<div class="mis-redes" style="display: block;position: fixed;bottom: 1rem;left: 1rem; opacity: 0.5; z-index: 1000;">
    <p style="font-size: .75rem;">Apock graficos</p>
    <div>
        <a target="_blank" href="https://www.facebook.com/ApockGraficos"><i class="fab fa-facebook-square"></i></a>
        <a target="_blank" href="https://twitter.com/ApockGraficos"><i class="fab fa-twitter"></i></a>
        <a target="_blank" href="https://www.instagram.com/ApockGraficos"><i class="fab fa-instagram"></i></a>
        <a target="_blank" href="https://www.youtube.com/channel/UC15DkMZQ80aoW_Rqk4n2T_w"><i class="fab fa-youtube"></i></a>
    </div>
</div>
<!--====  End of tarjeta  ====-->
</body>

</html>