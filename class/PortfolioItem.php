<?php

class PortfolioItem{
    
    public function __construct($titulo, $descricao){
        $connect = conexao();

        /*$sql = "INSERT INTO `posts` (`titulo`, `descricao`, `user`, `data`) VALUES ('$titulo', '$descricao', '$usuario', CURRENT_TIMESTAMP)";
        
        $result = $connect->query($sql);
        
        if($result){
            echo "<script>alert('Post inserido!')</script>";
        }else{
            echo "<script>alert('Ocorreu um ERRO, tente novamente!')</script>";
        }
        */
    }

    public static function listar(){
        return $data = array();
    }
}