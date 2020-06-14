<?php

class Usuario{
    
    public function login($user, $pass){
        $user = addslashes($user);
		$pass = addslashes($pass);
        $pass = md5($pass);
        $connect = conexao();
        
        $sql = "SELECT usuario FROM usuario WHERE usuario = '$user' AND senha='$pass'";
        $result = $connect->query($sql);
        
        if($result->num_rows > 0){
            $id = $this->getIdbyLogin($user);
            $data = $this->getData($id);

            if(!isset($_SESSION['logado'])){
                $_SESSION['logado'] = true;
                $_SESSION['id'] = $data['id'];
                $_SESSION['nome'] = $data['nome'];
                $_SESSION['usuario'] = $data['usuario'];
                header('Location: admin/');
            }else{
                $this->logout();
                header('Location: index.php');
            }
               
        }else{
            $_SESSION['erro'] = 'Usuário e/ou senha inválido(s)';
            header('Location: index.php');
        }
    }

    public static function logout(){    
        session_destroy();
    }

    public function getData($id){
        $connect = conexao();
        $data = array();

        $sql = "SELECT * FROM usuario WHERE id = '$id'";
        $result = $connect->query($sql);
        
        while ($row = mysqli_fetch_array($result)) {
            $data['id'] = $row['id'];
            $data['nome'] = $row['nome'];
            $data['usuario'] = $row['usuario'];
        }
        return $data;
    }

    public function update($id, $name, $user, $senha){
        $connect = conexao();

        if($senha == ""){
            $sql = "UPDATE usuario SET nome='$name', usuario='$user' WHERE id = $id";
        }else{
            $senha = md5($senha);
            $sql = "UPDATE usuario SET nome='$name', usuario='$user', senha='$senha' WHERE id = $id";
        }
        
        $result = $connect->query($sql);
        if(!$result){
            echo "Erro ao atualizar!";
        }


        
        
    }

    public function getIdbyLogin($login){
        $connect = conexao();
        
        $sql = "SELECT id FROM usuario WHERE usuario = '$login'";
        $result = $connect->query($sql);
        $id = mysqli_fetch_assoc($result)['id'];

        return $id;
    }
    
    public static function validaSessao(){
        if(!isset($_SESSION['logado']) && !isset($_SESSION['nome']) && !isset($_SESSION['usuario'])){
            session_destroy();
            header('Location: index.php');
        }
    }

   
}