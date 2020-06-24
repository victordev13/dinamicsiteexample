<?php

    require_once 'config.php';
    $posts = Post::listar(3); 

    if(isset($_GET['sair'])){
        Usuario::logout();
        unset($_SESSION);
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>_victorDEV - Desenvolvedor Web</title>
    <link rel="shortcute icon" type="img/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<header class="site-header container-lg">
        <div class="menu-left">
            <span id="menu-icon" href="#" onclick="showMenu()">|||</span>
            <a href="#" style="font-size: 14pt;color:white;" class="header-logo">_victorDEV</a>
        </div>
        <ul id="menu">
            <a href="#"><li>Início</li></a>
            <a href="#sobre"><li>Sobre</li></a>
            <a href="#blog"><li>Blog</li></a> 
            <a href="#servicos"><li>Serviços</li></a>
            <a href="#portfolio"><li>Portfólio</li></a>
            <a href="contato.php"><li>Contato</li></a>
           <li class="non-hover"><a href="#" id="btnModal" class="btn btn-white btn-sm" onclick="modalLogin()">Login</a></li>
        </ul>
    </header>
    <!--Principal-->
    <main>
        <div id="bg-modal" class="bg-modal">
            <div id="modal" class="modal login">
                <div class="modal-header">
                    <i id="close">&times</i>
                   
                </div>
                <div class="modal-body">
                    <h3>Acessar</h3><br>
                    <?php
                    if(isset($_SESSION['erro'])){
                        echo "<script>alert('".$_SESSION['erro']."')</script>";
                        unset($_SESSION['erro']);
                    };
                    if(isset($_SESSION['logado']) && isset($_SESSION['usuario'])){
                        echo "<p style='color: red'>Olá, ".$_SESSION['usuario'].", você já está logado!<br><a href='admin'/>Acessar</a>/<a href='?sair=1'/>Sair</a></p><br>";
                    }
                    ?>
                    <form method="POST" action="login.php">
                        <input type="text" name="usuario" placeholder="Usuário" required="">
                        <input type="password" name="senha" placeholder="Senha" required=""><br>
                        <input type="submit" class="btn btn-lg btn-blue btn-fill" name="login" value="Login">
                    </form>                    
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>

        <section id="slider-principal">
            <div class="container">
                <h2>BEM VINDO</h2><br>
                <a href="#servicos" class="btn btn-lg btn-outline">Conheça nossos serviços</a>
            </div>
        </section>
        <section class="container center">
            <h1>Victor Developer</h1><br>
            <p class="center fade" style="font-size: 14pt;">&ltCodificando sonhos/&gt</p>
        </section>
        <section class="container" id="sobre">
            <div class="center">
                <h3 class="title">Quem somos?</h3><br>
                <p class="text-sm center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><br><br>
            </div>
            <div>
                <figure class="center">
                    <img src="img/victor.jpg" class="person">
                </figure>
                <h4 style="margin-bottom: 10px">Victor de C. Silva</h4>
                 <ul id="icons-inline"> 
                    <li><a href="https://github.com/victordev13/" target="blank"><img src="img/github.png"></a></li>
                    <li><a href="https://www.linkedin.com/in/victorcarvalho13/" target="blank"><img src="img/linkedin.png"></a></li>
                    <li><a href="mailto:vtrcarvalho.13@gmail.com" target="blank"><img src="img/mail.png"></a></li>
                </ul>
                <ul id="habilidades">
                    <li>Desenvolvedor Front End</li>
                    <li>PHP Developer</li>
                    <li>Analista de SEO</li>
                </ul>
            </div>
        </section>
        <section class="container center" id="blog">
            <h3 class="title">Blog</h3><br>
            <div class="flex-col ajust-align">
                
            <?php
                foreach($posts as $key => $value){
                    echo '<div class="box-post">';
                    echo "<h3>{$value['titulo']}</h3>";
                    echo '<img src="img/img (11).jpg" alt="">';
                    echo "<a href='blog/post.php?id={$value['id']}' class='btn btn-sm btn-dark'>Ver Mais</a>";
                    echo '</div>';
                }
            ?>
            </div>
        </section>
        <section class="container center" id="servicos">
            <h3 class="title">Serviços</h3>

            <div class="flex-col ajust-align">
                <div class="box-post">
                    <img src="img/cog.png">
                    <p>Manutenção Sistemas</p>
                </div>
                <div class="box-post">
                    <img src="img/database.png">
                    <p>Banco de Dados</p>
                </div>
                <div class="box-post">
                    <img src="img/server.png">
                    <p>Hospedagem</p>
                </div>
                <div class="box-post">
                    <img src="img/web-development.png">
                    <p>Desenvolvimento</p>
                </div>
            </div><br><br>
            <a href="contato.html" class="btn btn-blue btn-me">Solicite um orçamento</a>
        </section>
        <section class="container center" id="portfolio">
            <h3 class="title">Portfólio</h3>
            <div class="flex-col ajust-align">
                <!-- exemplos -->
                <figure class="box-img">
                    <a href="">
                        <img src="img/img (4).jpg" alt="">
                        <figcaption>exemplo.com</figcaption>
                    </a>
                </figure>
                <figure class="box-img">
                    <a href="">
                        <img src="img/img (9).jpg" alt="">
                        <figcaption>exemplo1.com.br</figcaption>
                    </a>
                </figure>
                <figure class="box-img">
                    <a href="">
                        <img src="img/img (7).jpg" alt="">
                        <figcaption>exemplo3.com.br</figcaption>
                    </a>
                </figure>
                <figure class="box-img">
                    <a href="">
                        <img src="img/img (5).jpg" alt="">
                        <figcaption>exemplo4.net</figcaption>
                    </a>
                </figure>
                <figure class="box-img">
                    <a href="">
                        <img src="img/img (11).jpg" alt="">
                        <figcaption>exemplo5.br</figcaption>
                    </a>
                </figure>
                <figure class="box-img">
                    <a href="">
                        <img src="img/img (3).jpg" alt="">
                        <figcaption>exemplo6.com.br</figcaption>
                    </a>
                </figure>
            </div>
        </section>

        <section class="container newsletter center">
            <span style="color: white; font-size: 18pt">Increva-se para receber novidades!</span>
            <form method="POST">
                <input type="text" name="nome" placeholder="Nome">
                <input type="email" name="email" placeholder="E-mail">
                <input type="submit" name="" class="btn btn-blue btn-me" value="Inscrever-se">
            </form> 
        </section>
    </main>

    <footer>
        <div class="bottom">
            <a href="contato.html">Developed by <span>victor</span> &copy</a>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>