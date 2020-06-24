<?php 

require_once '../config.php';

if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $data = Post::getPostById($id);
    if($data == null){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['titulo']?></title>
    <link rel="shortcute icon" type="img/x-icon" href="../img/icon.png">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<header class="site-header container-lg">
        <div class="menu-left">
            <span id="menu-icon" href="#" onclick="showMenu()">|||</span>
            <a href="#" style="font-size: 14pt;color:white;" class="header-logo">_victorDEV</a>
        </div>
        <ul id="menu">
            <a href="../index.php"><li>Início</li></a>
            <a href="../index.php#sobre"><li>Sobre</li></a>
            <a href="../index.php#blog"><li>Blog</li></a> 
            <a href="../index.php#servicos"><li>Serviços</li></a>
            <a href="../index.php#portfolio"><li>Portfólio</li></a>
            <a href="../contato.php"><li>Contato</li></a>
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
                    <form>
                        <input type="text" name="" placeholder="Usuário" required="">
                        <input type="password" name="" placeholder="Senha" required=""><br>
                        <input type="submit" class="btn btn-lg btn-blue btn-fill" name="" value="Login">
                    </form>                    
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>

        <section class="container">
            <div class="post">
                <?php
                    echo "<h1>{$data['titulo']}</h1>";
                    echo "<p>{$data['descricao']}</p>";
                    echo "<span>Post by: <b>{$data['user']}</b>  em <b>".date('d/m/Y',strtotime($data['data']))."</b></span>";
                ?>
            </div>
        </section>
       
       
         <section class="container">   
            <div>
                <ul id="icons-inline"> 
                    <li><a href="https://github.com/victordev13/" target="blank"><img src="../img/github.png"></a></li>
                    <li><a href="https://www.linkedin.com/in/victorcarvalho13/" target="blank"><img src="../img/linkedin.png"></a></li>
                    <li><a href="mailto:vtrcarvalho.13@gmail.com" target="blank"><img src="../img/mail.png"></a></li>
                </ul>
            </div>
            
        </section>
    </main> 
    <footer>
        <div class="bottom">
            <a href="contato.html">Developed by <span>victor</span> &copy 2020</a>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>