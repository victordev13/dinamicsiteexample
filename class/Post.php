<?php

class Post{

    public function __construct($titulo, $descricao){
        $connect = conexao();
        $usuario = $_SESSION['usuario'];

        $sql = "INSERT INTO `posts` (`titulo`, `descricao`, `user`, `data`) VALUES ('$titulo', '$descricao', '$usuario', CURRENT_TIMESTAMP)";
        
        $result = $connect->query($sql);
        
        if($result){
            echo "<script>alert('Post inserido!')</script>";
        }else{
            echo "<script>alert('Ocorreu um ERRO, tente novamente!')</script>";
        }
    }

    public static function listar(){
        $connect = conexao();

        $sql = "SELECT * FROM posts";
        
        $result = $connect->query($sql);
        
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }

           return $data;
        }else{
            echo "<script>alert('Ocorreu um ERRO, tente novamente!')</script>";
        }
    }

    public static function delete($id){
        $connect = conexao();

        $sql = "DELETE FROM `posts` WHERE id = $id";
        echo $sql;
        $result = $connect->query($sql);
        
        if($result){
            echo "<script>alert('Post Excluido!')</script>";
        }else{
            echo "<script>alert('Ocorreu um ERRO, tente novamente!')</script>";
        }
    }

    public static function getpostById($id){
        $connect = conexao();

        $sql = "SELECT id, titulo, descricao FROM posts WHERE id = $id";
        
        $result = $connect->query($sql);
        
        if($result){
            $data =  mysqli_fetch_assoc($result);

           return $data;
        }else{
            echo "<script>alert('Ocorreu um ERRO, tente novamente!')</script>";
        }
    }

    public static function update($id, $titulo, $descricao){
        $connect = conexao();

        $sql = "UPDATE `posts` SET titulo='$titulo', `descricao` = '$descricao' WHERE `posts`.`id` = $id";

        $result = $connect->query($sql);
        
        if($result){
            echo "<script>alert('Post atualizado!')</script>";
        }else{
            echo "<script>alert('Ocorreu um ERRO, tente novamente!')</script>";
        }
    }
}

?>