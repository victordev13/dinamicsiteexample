<?php 
require_once __DIR__.'/config.php';

if(isset($_POST['login'])){
	$connect = conexao();

	if(isset($_POST['usuario']) && isset($_POST['senha'])){
		$user = new Usuario();
		$user->login($_POST['usuario'], $_POST['senha']);
	}else{
		header('Location: index.php');
	}
}else{
	header('Location: index.php');
}	

?>