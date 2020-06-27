<?php
    if(isset($_POST['enviar'])){
        echo "<script>alert('E-mail enviado com sucesso')</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Site Estático</title>
    <link rel="shortcute icon" type="img/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
   <header class="site-header container-lg">
        <div class="menu-left">
            <span id="menu-icon" href="#" onclick="showMenu()">|||</span>
            <a href="index.php" style="font-size: 14pt;color:white;" class="header-logo">_victorDEV</a>
        </div>

        <ul id="menu">
            <a href="index.php"><li>Início</li></a>
            <a href="index.php#sobre"><li>Sobre</li></a>
            <a href="index.php#blog"><li>Blog</li></a> 
            <a href="index.php#servicos"><li>Serviços</li></a>
            <a href="index.php#portfolio"><li>Portfólio</li></a>
            <a href="contato.php"><li>Contato</li></a>
        </ul>
    </header>
    <!--Principal-->
    <main>

        <section class="container">
            <div class="form-contato">
                <h3 class="title">Envie uma mensagem</h3><br><br>
                <form method="POST">
                    <input type="text" name="nome" placeholder="Nome Completo" required="">
                    <input type="email" name="email" placeholder="E-mail" required="">
                    <input type="text" name="assunto" placeholder="Assunto" required="">
                    <textarea placeholder="Mensagem..." required=""></textarea>
                    <input type="submit" class="btn btn-blue btn-lg btn-fill" name="enviar">
                </form>
            </div>
            
        </section>
         <section class="container">   
            <div>
                <ul id="icons-inline"> 
                    <li><a href="https://github.com/victordev13/" target="blank"><img src="img/github.png"></a></li>
                    <li><a href="https://www.linkedin.com/in/victorcarvalho13/" target="blank"><img src="img/linkedin.png"></a></li>
                    <li><a href="mailto:vtrcarvalho.13@gmail.com" target="blank"><img src="img/mail.png"></a></li>
                </ul>
            </div>
            
        </section>
    </main> 
    <footer>
        <div class="bottom">
            <a href="contato.php">Developed by <span>victor</span> &copy 2020</a>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>