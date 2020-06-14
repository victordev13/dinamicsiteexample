<?php
require_once 'db.php';
session_start();
spl_autoload_register(function($className){

    $dirClass = __DIR__."/class";
	$fileName = $dirClass . DIRECTORY_SEPARATOR . $className . ".php";	
	if(file_exists($fileName)){
		require_once($fileName);
	}
});	

function validaSessao(){
    if(!isset($_SESSION['logado']) && !isset($_SESSION['nome']) && !isset($_SESSION['usuario'])){
        session_destroy();
        header('Location: ../index.php');
    }
}



?>
