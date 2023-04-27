<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('/css/style.css')}}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <title>Mali Brasil</title>
        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->
        <!-- Styles -->
    </head>
    <body>
        <i id="open" class="bi bi-list"></i>
        <img id="logo-mobile" src="{{url('/img/mali-logosite-1.png')}}"/>
        <!-- cabecalho  -->
        <div class="cab-1">
            <p>MALI BRASIL vem mudando o mundo fazendo a sua parte, transformando o lixo eletrônico em computadores de alto desempenho</p>
            <div class="cab-2">
                <p class="contato">(11)95074-8528</p>
                <p class="contato p-claro">(Nosso Número)</p>
                <i class="contato bi bi-search"></i>
            </div>
        </div>
        <!-- sidebar -->
        <div class="side-bar">
            <div class="cab-side-bar">
                <img src="{{url('/img/mali-logosite-1.png')}}"/>
                <i id="close" class="bi bi-arrow-bar-left"></i>
            </div>
            <h4 class="menu">Serviços</h4>
            <h4 class="menu">Sobre Nós</h4>
            <h4 class="menu">Tour da Mali</h4>
            <h4 class="menu">Blog</h4>
            <h4 class="menu">Certificações</h4>
            <h4 class="menu">Dados</h4>
            <h4 class="menu">Nossos Parceiros</h4>
            <h4 id="contate-nos" class="menu">Contate-nos</h4>
            <button id="bt-contato">CONTATE-NOS</button>
        </div>
        <!-- menu -->
        <div class="cab-3">
            <img id="logo-mali-brasil" src="{{url('/img/mali-logosite-1.png')}}"/>
            <h4 class="menu">Serviços</h4>
            <h4 class="menu">Sobre Nós</h4>
            <h4 class="menu">Tour da Mali</h4>
            <h4 class="menu">Blog</h4>
            <h4 class="menu">Certificações</h4>
            <h4 class="menu">Dados</h4>
            <h4 class="menu">Nossos Parceiros</h4>
            <h4 id="contate-nos" class="menu">Contate-nos</h4>
            <button id="bt-contato">CONTATE-NOS</button>
        </div>
    @yield('body')
    </body>
    <!-- BIBLIOTECAS DO JS AQUI  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- BIBLIOTECAS DO JS AQUI  -->
    @yield('script')
   <!-- FOOTER -->
    <hr style="color:#D7D7D7; margin: 0 5vh;">
    <footer>
        <div class="footer-link">
            <div class="footer-text">
                <img src="{{url('/img/mali-logosite-1.png')}}"/>
                <p>
                    A Mali Brasil Reversa é uma empresa fundada durante a pandemia que atua na reciclagem de eletrônicos e na destinação correta de resíduos sólidos. Com ações ambientalmente responsáveis, a empresa transforma sucata e-lixo em aparelhos novos, contribuindo para um futuro melhor para as gerações futuras.
                </p>
            </div>
            <div>
                <dl>
                    <dd><b>Institucional</b></dd>
                    <dd class="link">Quem Somos</dd>
                    <dd class="link">Contato</dd>
                    <dd class="link">Politica de Privacidade</dd>
                </dl>
            </div>
            <div>
                <dl>
                    <dd><b>Links Uteis</b></dd>
                    <dd class="link">Programa de referência</dd>
                    <dd class="link">Termo de uso</dd>
                </dl>
            </div>
            <div>
                <dl>
                    <dd><b>Sede da Empresa</b></dd>
                    <dd>Rua Etelvina, 63 -  Vila Rosalia.<br>Guarulhos SP - Cep-07070-140 </dd>
                    <dd><b>Telefone</b></dd>
                    <dd>(11) 95074-8528</dd>
                    <dd class="link"><b>Outros meios de contato</b></dd>
                </dl>
            </div>
        </div>
        <div class="newslatter">
            <input class="input-newslatter" placeholder="Newslatter"></input>
            <button id="bt_newslatter">Enviar</button>
        </div>
    </footer>
    <div class="redes_sociais">
        <img class="rede-social-icon" id="facebook-ico" src="{{url('/img/facebook.png')}}"/>
        <img class="rede-social-icon" id="twitter-ico" src="{{url('/img/twitter.png')}}">
        <img class="rede-social-icon" id="youtube" src="{{url('/img/youtube.png')}}">
        <img class="rede-social-icon" id="linkedin" src="{{url('/img/linkedin.png')}}">
    </div>
    <hr style="color:#D7D7D7; margin: 0 5vh;">
    <div class="end-page">
        <p class="end-text">
            © 2023 Mali Brasil reversa. Todos os direitos reservados.
            Todas as marcas registradas são de propriedade de seus donos.
        </p>
    </div>
</html>

    