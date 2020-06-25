<?php

class PortfolioItem{
    
    public function __construct($link, $imagem){
        $connect = conexao();

        $sql = "INSERT INTO `portfolio` (link, imagem) VALUES ('$link', '$imagem')";
        
        $result = $connect->query($sql);
        
        if($result){
            echo "<script>alert('Item inserido!')</script>";
        }else{
            echo "<script>alert('Ocorreu um ERRO, tente novamente!')</script>";
        }
        
    }

    public static function listar($limit = 0){
        $connect = conexao();

        if($limit != 0){
            $sql = "SELECT * FROM portfolio LIMIT $limit";
        }else{
            $sql = "SELECT * FROM portfolio";
        }
        
        $result = $connect->query($sql);
        
        if($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            return $data;
        }else{
            return $data = [];
            echo "<script>alert('Ocorreu um ERRO, tente novamente!')</script>";
        }
    }

    public static function delete($id){
        $connect = conexao();

        $sql = "DELETE FROM `portfolio` WHERE id = $id";
        $result = $connect->query($sql);
        
        if($result){
            echo "<script>alert('Item Excluido!')</script>";
        }else{
            echo "<script>alert('Ocorreu um ERRO, tente novamente!')</script>";
        }
    }

    public static function getItemPortfolio($id){

        $connect = conexao();

        $sql = "SELECT link, imagem, date_log FROM portfolio WHERE id = $id";
        
        $result = $connect->query($sql);
        
        if($result){
            $data =  mysqli_fetch_assoc($result);
           return $data;
        }else{
            echo "<script>alert('Ocorreu um ERRO, tente novamente!')</script>";
        }
    }

    public static function update($id, $link, $imagem){
        $connect = conexao();

        $sql = "UPDATE `portfolio` SET link='$link', imagem='$imagem' WHERE `portfolio`.`id` = $id";

        $result = $connect->query($sql);
        
        if($result){
            echo "<script>alert('Item atualizado!')</script>";
        }else{
            echo "<script>alert('Ocorreu um ERRO, tente novamente!')</script>";
        }
    }
}