﻿<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Topo Treinamentos</title>

    <link rel="sortcut icon" href="img/iconetopo.jpg" type="image/jpg" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/loginNovo.css" type="text/css">
    <script src="js/constroi.js"> </script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./about-us.html">A Empresa</a></li>
                <li class="active"><a href="./services.html">Cursos</a></li>
               <!-- <li><a href="https://podiumcursos.ouromoderno.com.br/">Loja Virtual</a></li> -->
                <li><a href="javascript:muda();">Login</a></li>
                <li><a href="./parte.html">Afiliados</a></li>
                <li><a href="./contact.html">Contato</a></li>
                <li style="cursor:pointer"><a>Validar Certificado Abaixo</a></li>
                <form id="certi2" action="valida.php" method="POST"><input type="text" name="codigo">&nbsp<input value="Enviar" name="verificaCerti" type="submit"/></form>
                
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <!--<a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>-->
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="img/logoo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./about-us.html">A Empresa</a></li>
                            <li class="active"><a href="./services.html">Cursos</a></li>
                           <!--  <li><a href="https://podiumcursos.ouromoderno.com.br/">Loja Virtual</a></li> -->
                            <li><a href="javascript:muda();">Login</a></li>
                            <li><a href="./parte.html">Afiliados</a></li>
                            <li><a href="./contact.html">Contato</a></li>
                            <li style="cursor:pointer"><a onclick="certificado();">Validar Certificado</a></li>
                            <form id="certi" style="display:none" action="valida.php" method="POST"><input type="text" name="codigo">&nbsp<input value="Enviar" name="verificaCerti" type="submit"/></form>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="to-social">
                            <!--<a href="https://www.facebook.com/grupopodium/"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>-->
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.instagram.com/topo.treinamentos/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        <div id="muda" style="display:none;height: 95vh;"> 
            <section class="login" style="margin-top: -180px;">
                <div class="container">
                    <div class="row">
                        <div class="login-imagem col-12 col-md-4">
                            <img class="img-fluid" src="./img/Logo.png" alt="Grupo Podium Logomarca">
                        </div>
                        <div class="login-div col-12 col-md-4">
                            <!-- <a href="javascript:muda2();">[X]</a> -->
                            <button class="close" onclick="muda2();">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p class="titulo">Entre com seu cadastro</p>
                            <form method="post" action="valida.php">
                                
                            <input class="col-12" type="text" name="Login"  placeholder="Usuário" required>
                            <input class="col-12" id="senha" type="password" name="Senha"placeholder="Senha" required>
                                <input class="col-12" type="submit" name="submitindex" id="submit" value="Entrar">
                            </form>
                            <div>
                                <input type="checkbox" onclick="mostraSenha();"> Mostrar senha
                            </div>
                                <a href="javascript:muda3();">Esqueci minha senha</a>
                        </div>
                        
                        <div class="col-12 col-md-8 p-0 mt-2">
                        </div>
                    </div>
                </div> 
            </div>
            <div id="muda2" style="height: 95vh; display: none;">
                <section class="login" style="margin-top: -180px;">
                    <div class="container">
                        <div class="row">
                            <div class="login-imagem col-12 col-md-4">
                                <img class="img-fluid" src="./img/Logo.png" alt="Grupo Podium Logomarca">
                            </div>
                            <div class="login-div col-12 col-md-4">
                                <p class="titulo">Digite seu Email</p>
                                <form method="POST" action="esqueci.php">
                                    <input type="hidden" name="_token" value="PG9KJSXDEDSJsYlSYuH7Q5ZHBKxbyxqcIOrntZba">
                                    <input class="col-12" type="text" name="email" id="email" placeholder="Email" required>
                    
                                    <input class="col-12" type="submit" name="Enviar" id="submit" value="Enviar">
                                </form>
                                    <a href="javascript:muda4();">Voltar</a>
                            </div>
                            
                            <div class="col-12 col-md-8 p-0 mt-2">
                            </div>
                        </div>
                    </div> 
                </section>
            </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Cursos</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Nossos Cursos</span>
                        <h2>PREPARE-SE COM O QUE HÁ DE MELHOR</h2>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-lg-3 order-lg-1 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/classes/Cuidador.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-2 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Cuidador de Idosos</h4>
                        <p>É a pessoa responsável por ajudar nos cuidados de uma pessoa idosa. </p>
                        <p><!-- INICIO DO BOTAO PAGSEGURO --><a href="https://pag.ae/7YK5XQiTG/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><!-- FIM DO BOTAO PAGSEGURO --></p>
                        <p><!-- INICIO DO BOTAO PIX --><a href="pagcpix.php?id=60" target="_blank" title="Pagar com PIX"><img src="img/8.png" height="40px" width="130px" alt="Pague com Pix!" /></a><!-- FIM DO BOTÃO PIX --></p>
                        <h4>R$130,00</h4>
                       <!-- <a href="#">Em Breve!</a>-->
                    </div>
                </div>
                
                
                <div class="col-lg-3 order-lg-3 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/classes/nr10_básico.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-4 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>NR10 - Básico</h4>
                        <p>Curso Obrigatório para profissionais que interagem com Média ou Baixa tensão.</p>
                        <a href="#">Em Breve!</a>
                    </div>
                </div>
                
                
               <div class="col-lg-3 order-lg-8 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/classes/nr35_trabalho_em_altura.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-7 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>NR35 - Trabalho em altura</h4>
                        <p>Segurança no trabalho e resgate em altura.</p>
                        <!--<a href="#">Em Breve!</a>-->
                        <p><!-- INICIO DO BOTAO PAGSEGURO --><a href="https://pag.ae/7YJLrmd18/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><!-- FIM DO BOTAO PAGSEGURO --></p>
                        <p><!-- INICIO DO BOTAO PIX --><a href="pagcpix.php?id=71" target="_blank" title="Pagar com PIX"><img src="img/8.png" height="40px" width="130px" alt="Pague com Pix!" /></a><!-- FIM DO BOTÃO PIX --></p>
                        <h4>R$130,00</h4>
                    </div>
                </div>
                
                
                <div class="col-lg-3 order-lg-6 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/classes/maquinas.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-5 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>NR12 - Máquinas e Equipamentos</h4>
                        <p>Segurança no trabalho com máquinas e equipamentos.</p>
                        <a href="#">Em Breve!</a>
                    </div>
                </div>
                
                
                <div class="col-lg-3 order-lg-9 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/classes/nr33_espaco_confinado.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-10 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>NR33 - Espaço Confinado</h4>
                        <p>Capacite-se a trabalhar e realizar resgates em espaços confinados.</p>
                        <a href="#">Em Breve!</a>
                    </div>
                </div>
                
                
                
                <div class="col-lg-3 order-lg-15 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/classes/NR20.jpg" alt="">
                    </div>
                </div>
                
                <div class="col-lg-3 order-lg-16 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>NR20 - Líquidos, combustíveis e inflamáveis</h4>
                        <p> Segurança no trabalho com inflamáveis e combustíveis.</p>
                        <p><!-- INICIO DO BOTAO PAGSEGURO --><a href="https://pag.ae/7YK63o1Vm/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><!-- FIM DO BOTAO PAGSEGURO --></p>
                        <p><!-- INICIO DO BOTAO PIX --><a href="pagcpix.php?id=74" target="_blank" title="Pagar com PIX"><img src="img/8.png" height="40px" width="130px" alt="Pague com Pix!" /></a><!-- FIM DO BOTÃO PIX --></p>
                        <h4>R$130,00</h4>
                        <!--<a href="#">Em Breve!</a>-->
                    </div>
                </div>
                
                <div class="col-lg-3 order-lg-13 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/classes/Robótica.jpg" alt="">
                    </div>
                </div>
                
                <div class="col-lg-3 order-lg-14 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>Robótica</h4>
                        <p>Aqui você estuda as tecnologias associadas a concepção e construção de robôs. </p>
                        <p><!-- INICIO DO BOTAO PAGSEGURO --><a href="https://pag.ae/7YK5_b36a/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><!-- FIM DO BOTAO PAGSEGURO --></p>
                        <p><!-- INICIO DO BOTAO PIX --><a href="pagcpix.php?id=69" target="_blank" title="Pagar com PIX"><img src="img/8.png" height="40px" width="130px" alt="Pague com Pix!" /></a><!-- FIM DO BOTÃO PIX --></p>
                        <h4>R$160,00</h4>
                        <!--<a href="#">Em Breve!</a>-->
                    </div>
                </div>
                <div class="col-lg-3 order-lg-12 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Primeiros Socorros</h4>
                        <p>Capacite-se ou capacite seus colaboradores a prestarem os primeiros socorros emergênciais.</p>
                        <a href="#">Em Breve!</a>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-11 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/classes/primeiros_socorros.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-16 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Porteiro e Vigia</h4>
                        <p>Torne-se um profissional da área de segurança patrimonial.</p>
                        <!-- INICIO DO BOTAO PAGSEGURO --><p><a href="https://pag.ae/7YeimHWpv/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a></p><!-- FIM DO BOTAO PAGSEGURO -->
                        <p><!-- INICIO DO BOTAO PIX --><a href="pagcpix.php?id=62" target="_blank" title="Pagar com PIX"><img src="img/8.png" height="40px" width="130px" alt="Pague com Pix!" /></a><!-- FIM DO BOTÃO PIX --></p>
                      <!--  <a href="#">Matricule-se</a>-->
                      <h4>R$99,00</h4>
                    </div>
                </div>
                 <div class="col-lg-3 order-lg-15 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/classes/porteiro.jpg" alt="">
                    </div>
                </div>
                
                
                
                
                <div class="col-lg-3 order-lg-14 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Atendente de Farmácia</h4>
                        <p>Responsável por quase toda a rotina de atendimento e manutenção da farmácia. </p>
                        <p><!-- INICIO DO BOTAO PAGSEGURO --><a href="https://pag.ae/7YK67bHM1/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><!-- FIM DO BOTAO PAGSEGURO --></p>
                        <p><!-- INICIO DO BOTAO PIX --><a href="pagcpix.php?id=75" target="_blank" title="Pagar com PIX"><img src="img/8.png" height="40px" width="130px" alt="Pague com Pix!" /></a><!-- FIM DO BOTÃO PIX --></p>
                        <h4>R$130,00</h4>
                        <!--<a href="#">Em Breve!</a>-->
                    </div>
                </div>
               
                 <div class="col-lg-3 order-lg-13 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/classes/farmácia.jpg" alt="">
                    </div>
                </div>
                
               
                
                
                
                


            </div>
                
        </div>
    </div>
    </section>
    <!-- Services Section End -->


    <!-- Pricing Section Begin -->
   <!-- <section class="pricing-section service-pricing spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Nossos Planos EAD</span>
                        <h2>Escolha o plano que melhor se encaixa em seu perfil</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>Plano Silver</h3>
                        <div class="pi-price">
                            <h2>R$ 99.90</h2>
                            <span>Curso Único</span>
                        </div>
                        <ul>
                            <li>Aulas Interativas</li>
                           <!-- <li>Material em PDF</li>
                            <li>Tutor Online</li>
                            <li>Vídeos Explicativos</li>
                            <li>3 Meses de Acesso</li>
                            <li>Qualquer curso a sua escolha</li>
                            <li>Certificado Premium</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">Contrate</a>
                       <!-- <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>Plano Diamond</h3>
                        <div class="pi-price">
                            <h2>R$ 1000.00</h2>
                            <span>acesso completo</span>
                        </div>
                        <ul>
                            <li>Aulas Interativas</li>
                           <!-- <li>Material em PDF</li>
                            <li>Tutor Online</li>
                            <li>Vídeos Explicativos</li>
                            <li>1 Ano de Acesso</li>
                            <li>Todos os nossos Cursos Liberados</li>
                            <li>Certificado Premium</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">Contrate</a>
                      <!--  <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>Plano Gold</h3>
                        <div class="pi-price">
                            <h2>R$ 500.00</h2>
                            <span>Combo exclusivo</span>
                        </div>
                        <ul>
                            <li>Aulas Interativas</li>
                           <!-- <li>Material em PDF</li>
                            <li>Tutor Online</li>
                            <li>Vídeos Explicativos</li>
                            <li>6 Meses de Acesso</li>
                            <li>Pacote Com 5 Cursos</li>
                            <li>Certificado Premium</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">Contrate</a>
                       <!-- <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!-- Pricing Section End -->
    <!-- Banner Section Begin 
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text service-banner">
                        <h2>Exercise until the body obeys.</h2>
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                        <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><i
                                class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     Banner Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>Rua: Ten. Fortunato 200, centro<br/> Cataguases MG</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>(32) 3421-2269</li>
                            <li>(32) 9 8872-5299</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>contato@topotreinamentos.com.br</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#"><img src="img/topotreinamentos.png" alt=""></a>
                        </div>
                        <p>O topo é o lugar dos vencedores, dos audases, dos persistentes.
                            Não há lugar no topo para as almas tímidas e frias.</p>
                        <div class="fa-social">
                            <!--<a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>-->
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa  fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Links Utéis</h4>
                        <ul>
                            <li><a href="./about-us.html">Sobre</a></li>
                            <li><a href="./services.html">Cursos</a></li>
                            <li><a href="./contact.html">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Suporte</h4>
                        <ul>
                            <li><a href="/ead/Sistema/public/index.php">Login</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=5532988725299&text=Quero%20saber%20mais%20informa%C3%A7%C3%B5es!">Whatsapp</a></li>
                            <li><a href="./parte.html">Trabalhe conosco</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Dicas</h4>
                        <div class="fw-recent">
                            <h6><a href="#">Guarde seu EPI sempre em local seco e fresco.</a></h6>
                            <ul>
                                <li>cordas</li>
                                <li>cintos</li>
                            </ul>
                        </div>
                        <div class="fw-recent">
                            <h6><a href="#">Revise seu equipamento antes de cada trabalho.</a></h6>
                            <ul>
                                <li>mosquetões</li>
                                <li>freios</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Topo Treinamentos desenvolvido por Davi Guerra</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>