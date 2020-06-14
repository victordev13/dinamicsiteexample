<?php
require_once '../config.php';
validaSessao();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>_victorDEV - Desenvolvedor Web</title>
    <link rel="shortcute icon" type="img/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body style="background-color: #444;">
<header class="site-header container-lg">
        <div class="menu-left">
            <span id="menu-icon" href="#" onclick="showMenu()">|||</span>
            <a href="#" style="font-size: 14pt;color:white;" class="header-logo">_victorDEV</a>
        </div>
        <ul id="menu">
            <a href="#"><li>Início</li></a>
            <a href="../?sair=1" class="sair"><li>Sair</li></a>
        
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
        <aside>
            <ul>
                <a href="index.php" ><li>Inicio</li></a>
                <a href="posts.php"><li>Posts</li></a>
                <a href="portfolio.pgp" ><li>Portfólio</li></a>
                <a href="?page=profile" ><li>Meu Perfil</li></a>
            </ul>
        </aside>