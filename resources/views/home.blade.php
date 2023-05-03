@extends('template')

@section('body')
        <!-- Slides -->
        <div id="slide-container" class="inicio-opacity-banner">
            <div id="reserva">
                <h1 id="titulo-reserva" class="slide-titulo">Mali Brasil Reserva</h1>
                <h4 id="texto-reserva" class="slide-text">Mali vem salvando o planeta fazendo sua parte, Transformando eletrônicos obsoletos em matéria-prima para construção de novos computadores.</h4>
            </div>
            <div class="slides">
                <div id="banner-1" class="slide-change" onclick="banner(this.id)">
                    <p>Nosso compromisso com o mundo</p>
                </div>
                <div id="banner-2" class="slide-change" onclick="banner(this.id)">
                    <p>Consumo versus descarte</p>
                </div>
                <div id="banner-3" class="slide-change" onclick="banner(this.id)">
                    <p>O que é Logística Reversa</p>
                </div>
                <div id="banner-4" class="slide-change" onclick="banner(this.id)">
                    <p>Quais são os nossos processos na empresa</p>
                </div>
                <div id="banner-5" class="slide-change" onclick="banner(this.id)">
                    <p>Nossas linhas de produtos</p>
                </div>
                <div id="banner-6" class="slide-change" onclick="banner(this.id)">
                    <p>A sua chance de cuidar do planeta</p>
                </div>
            </div>
        </div>
        <div class="circle-slides">
            <div id="banner-1" class="slide-change" onclick="banner(this.id)">
                <i id="ban-circle-1" class="bi bi-circle-fill"></i>
            </div>
            <div id="banner-2" class="slide-change" onclick="banner(this.id)">
                <i id="ban-circle-2" class="bi bi-circle-fill"></i>
            </div>
            <div id="banner-3" class="slide-change" onclick="banner(this.id)">
                <i id="ban-circle-3" class="bi bi-circle-fill"></i>
            </div>
            <div id="banner-4" class="slide-change" onclick="banner(this.id)">
                <i id="ban-circle-4" class="bi bi-circle-fill"></i>
            </div>
            <div id="banner-5" class="slide-change" onclick="banner(this.id)">
                <i id="ban-circle-5" class="bi bi-circle-fill"></i>
            </div>
            <div id="banner-6" class="slide-change" onclick="banner(this.id)">
                <i id="ban-circle-6" class="bi bi-circle-fill"></i>
            </div>
        </div>
        <!-- Rede internacional estrategica -->
        <div class="rede-content">
            <div class="cab-4">
                <div class="titulo-1">
                    <h2 id="redeInternacion">Rede Internacional <span id="estrategica">Estratégica</span></h2>
                </div>
                <div>
                    <h5>A Mali Brasil Reversa possui uma rede internacional estrategicamente estabelecida em 16 países, com mais de 100 instalações certificadas, garantindo cobertura global para nossos clientes.</h5>
                </div>
            </div>
            <div class="div-localidade">
                <div class="rede_container">
                </div>
                <div class="rede_text">
                    <div class="rede_text_2">
                        <div class="rede_div">
                            <h3>Crescimento Constante</h3>
                            <p>
                                A capacidade anual de reciclagem da Mali Brasil Reversa é de mais de um bilhão de libras em dispositivos eletrônicos, distribuídos em quatro locais certificados, atendendo a todas as regiões do Brasil.
                            </p>
                        </div>
                        <div class="rede_div">
                            <h3>26 Estados</h3>
                            <p>
                                A Mali Brasil Reverse tem a infraestrutura estratégica para atender clientes em todos os 26 estados do Brasil e internacionalmente.                        
                            </p>
                        </div>
                    </div>
                    <button id="bt_localidades">Veja nossas localidades<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <!-- Declaracao de politica -->
        <div class="politica">
            <div class="politica-div">
                <div class="politica-org">
                    <h6 class="politica-text politica-titulo-1">Ambiental, sustentabilidade e tecnologia</h6>
                    <h5 class="politica-text">Declaração da Política de Qualidade e Ambiental</h5>
                </div>
                <p class="p-politica">A Declaração da Politica de Qualidade e Ambiental  tem objetivo consolidar e mostrar a transformação que podemos causar para com você e o mundo através da gestão da nossa própria operação.</p>
            </div>
            <div class="div-ler">
                <button id="bt_ler">Ler Completo<i class="bi bi-arrow-right"></i></button>
            </div>
            <div>
                <img class="img-nota" src="{{url('/img/bloco-notas.png')}}"/>
            </div>
        </div>
        <div class="img-green">
            <img id="img-green" src="{{url('/img/green.png')}}"/>
            <div class="img-green-text">
                <h4>A Mali Brasil Reversa é a escolha consciente para <span style="color: #3D8B5B">descarte seguro</span> e <span style="color: #3D8B5B">sustentável</span> do seu e-lixo, <span style="color: #3D8B5B">preservando</span> o meio ambiente</h4>
                <p class="green-text">
                    Torne-se parte da economia circular e sustentável com a Mali Brasil Reversa.
                    Não somos apenas uma empresa de reciclagem, somos uma inovação renovável que transforma materiais descartados em uma nova oportunidade de vida útil.
                </p>
                <h4><i class="bi bi-check-circle-fill"></i>Torne-se parte da economia circular e sustentável com a Mali Brasil Reversa.</h4>
                <h4><i class="bi bi-check-circle-fill"></i>Inovação sustentável em tecnologia.</h4>
                <h4><i class="bi bi-check-circle-fill"></i>Tecnologia transformada em sustentabilidade.</h4>
            </div>
        </div>
        <!-- certificacao ISO -->
        <div class="content-iso">
            <div class="cab-5">
                <h1> Somo uma solução internacional com <span style="color: #3D8B5B">Certificação ISO</span></h1>
            </div>
            <div class="iso-container">
                <img id="green-2" src="{{url('/img/arvore.png')}}"/>
                <div class="green2-text">
                    <h1>O que é o  Certificado <span style="color:#3D8B5B">ISO 14001</span></h1>
                    <p>
                        ISO 14001 é uma norma internacional que estabelece diretrizes para a gestão ambiental. Ela ajuda as empresas a identificar e gerenciar seus impactos ambientais, promovendo a sustentabilidade e a conformidade regulatória. A certificação ISO 14001 é uma maneira reconhecida globalmente de demonstrar o compromisso de uma empresa com a proteção ambiental.
                    </p>
                    <h1>Qual a importância desse Certificado?</h1>
                    <p>
                        O certificado ISO 14001 é importante porque mostras o quanto as empresas estão tomando com dano ambientais e demonstra seu compromisso com a sustentabilidade.
                    </p>
                    <button id="bt_certificado">Veja nossas certificações<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <!-- Empresas -->
        <div class="black">
            <div class="black-div">
                <h2 class="white-text">Trabalhamos com as Grandes Marcas</h2>
                <p class="white-text">
                Estamos focados em lhe trazer o melhor resultado com a restauração de máquinas então trabalhamos com as melhores marcas, e as marcas que mais produzem.
                </p>
                <button id="bt_saiba">Saiba mais<i class="bi bi-arrow-right"></i></button>
            </div>
            <!-- logos -->
            <div class="grupo-logos">
                <img class="logo-marca" src="{{url('/img/logo-marcas/lenovo-logo-1.png')}}">
                <img class="logo-marca" src="{{url('/img/logo-marcas/lg.png')}}">
                <img class="logo-marca" src="{{url('/img/logo-marcas/dell.png')}}">
                <img class="logo-marca" src="{{url('/img/logo-marcas/Samsung.png')}}">
                <img class="logo-marca" src="{{url('/img/logo-marcas/aoc.png')}}">
                <img class="logo-marca" src="{{url('/img/logo-marcas/positivo.png')}}">
            </div>
        </div>
        <!-- Parceiros -->
        <div>
            <div class="titulo-parceiros">
                <h1>Nossos <span style="color:#3D8B5B">Parceiros</span></h1>
                <hr style="margin: 0 54vh; color:#D7D7D7">
            </div>
            <div class="content-parceiros">
                <div class="logo-parceiros">
                    <img class="logo-parceiros-resp" src="{{url('/img/logo-parceiros/CICLOCONSCIENT.png')}}">
                    <p class="p-parceiros">
                        IBDN - Instituo Brasileiro de Defesa da Natureza, ao longo dos 30 anos de mercado desenvolve e implementa projetos focados na difusão  da Educação Ambiental como ferramenta fundamental para mudança de atitude.
                    </p>
                </div>
                <div class="logo-parceiros">
                    <img class="logo-parceiros-resp" src="{{url('/img/logo-parceiros/CICLOCONSCIENTE-2.png')}}">
                    <p class="p-parceiros">
                        EPN - Programa de Educação ambiental criado em 2002, que visa estimular o contato de pessoas de todas as idades e classes sociais com o meio ambiente e sua diversidade, objetivando a quebra de paradigmas e desenvolvendo uma nova Consciência Ambiental.
                    </p>
                </div>
                <div class="logo-parceiros">
                    <img class="logo-parceiros-resp" src="{{url('/img/logo-parceiros/CICLOCONSCIENTE-3.png')}}">
                    <p class="p-parceiros">
                        CCIBDN - Todos os dias, toneladas de produtos são descartados antes do seu vencimento original, por uma questão de logística, por acordos setoriais ou mesmo por queda em sua comercialização.
                    </p>
                </div>
            </div>
        </div>
        <!-- Certificacoes e cadastros -->
        <div class="content-certificacoes">
            <div class="card-certificacoes">
                <div class="titulo-certificacoes">
                    <h5 class="no-margem" style="color: gray;">Environmental Compliance</h5>
                    <h3 class="no-margem" style="color: white;">Certificações e Cadastros</h3>
                </div>
                <div class="logo-certificacoes">
                    <img class="logo-certt-resp" src="{{url('/img/logo-certificacoes/Ativo-15site.png')}}">
                    <img class="logo-certt-resp" src="{{url('/img/logo-certificacoes/Ativo-20site.png')}}">
                    <img class="logo-certt-resp" src="{{url('/img/logo-certificacoes/Ativo-17site.png')}}">
                    <img class="logo-certt-resp" src="{{url('/img/logo-certificacoes/Group3.png')}}">
                    <img class="logo-certt-resp" src="{{url('/img/logo-certificacoes/Ativo-16site.png')}}">
                    <img class="logo-certt-resp" src="{{url('/img/logo-certificacoes/Ativo-19site.png')}}">
                </div>
                <div class="text-certificacoes">
                    <p class="white-text">
                        A MALI BRASIL REVERSA detém certificados de alto nível por sempre cuidar da natureza através dos processos de descarte e revalorização do e-lixo que é transformado em maquinas de alta performance.
                    </p>
                </div>
                <div>
                    <button id="bt_mali">Conheça a Mali Brasil<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <!-- BLOG -->
        <div class="content-blog">
            <h1 class="titulo-blog"><span id="titulo-blog">Acompanhe nosso</span> Blog</h1>
            <div class="lista-blog">
                <div class="card-blog">
                    <img src="{{url('/img/blog/div.thumbnail.png')}}">
                    <div class="text-blog">
                        <div>
                            <h4>Como reduzir o impacto ambiental do seu negócio</h4>
                        </div>
                        <div>
                            <p>A preocupação com o meio ambiente e as empresas precisam se adaptar para reduzir o impacto ambiental de suas atividades...</p>
                        </div>
                        <div class="data-blog">
                            <p>BLOG - 27 de março de 2023</p>
                        </div>
                    </div>
                </div>
                <div class="card-blog">
                    <img src="{{url('/img/blog/div.thumbnail.2.png')}}">
                    <div class="text-blog">
                        <div>
                            <h4>A importância da reciclagem de eletrônicos</h4>
                        </div>
                        <div>
                            <p>
                                A reciclagem de eletrônicos é fundamental para a preservação do meio ambiente e da saúde pública. A tecnologia...
                            </p>
                        </div>
                        <div class="data-blog">
                            <p>BLOG - 22 de janeiro de 2023</p>
                        </div>
                    </div>
                </div>
                <div class="card-blog">
                    <img src="{{url('/img/blog/div.thumbnail.3.png')}}">
                    <div class="text-blog">
                        <div>
                            <h4>10 Fatos importantes sobre o e-lixo que você precisa saber</h4>
                        </div>
                        <div>
                            <p>
                                Com o avanço da tecnologia, a geração de lixo eletrônico, também conhecido como e-lixo, tem aumentado consi...
                            </p>
                        </div>
                        <div class="data-blog">
                            <p>BLOG - 27 de março de 2023</p>
                        </div>
                    </div>
                </div>
                <div class="card-blog">
                    <img src="{{url('/img/blog/bigstock.png')}}">
                    <div class="text-blog">
                        <div>
                            <h4>Lixo Eletrônico Corporativo: Como gerencia o impacto </h4>
                        </div>
                        <div>
                            <p>
                                Segundo a ONU, cerca de 50 milhões de toneladas de resíduos eletrônicos são descartadas anualmente no mundo... 
                            </p>
                        </div>
                        <div class="data-blog">
                            <p>BLOG - 12 de dezembro de 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-bt-blog">
                <button id="bt_blog">Ver Tudo<i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
        <div class="form">
            <div class="content-form">
                <div class="white-text div-form">
                    <div class="form-info">
                        <h5 class="no-margem">Email:</h5>
                        <label>contato.malibrasil@gmail.com</label>
                    </div>
                    <div class="form-info">
                        <h5 class="no-margem">Telefone:</h5>
                        <label>(11) 95074-8528</label>
                    </div>
                    <div class="form-info">
                        <h5 class="no-margem">Sede da Empresa:</h5>
                        <label>Rua Etelvina, 63 -  Vila Rosalia.</label>
                        <br>
                        <label>Guarulhos SP - Cep-07070-140</label>
                    </div>
                </div>
                <form class="div-form input-form" action="{{route('sendgrid')}}" method="post">
                    @csrf
                    <input id="nome" name="nome" placeholder="Nome"></input>
                    <input id="email" name="email" placeholder="Email"></input>
                    <input id="telefone" name="telefone" placeholder="Telefone"></input>
                    <textarea id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
                    <button class="bt-black" type="submit">Enviar</button>
                </form>
            </div>
        </div>
@endsection
@section('script')
    <script src="{{url('/js/home/script.js')}}"></script>
@endsection
        
