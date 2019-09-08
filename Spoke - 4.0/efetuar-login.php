<?php 
require_once ("funcoes-usuario.php");
require_once 'conecta.php';

$usuario = buscaUsuario($conexao, $_POST['usuario'], $_POST['senha']);


if($usuario == null) {
	$_SESSION["danger"] = "Usuário ou senha inválido.";
	header("Location: login.php");
} else {
	$_SESSION["success"] = "Usuário logado com sucesso.";
	logaUsuario($usuario["usuario"]);
	header("Location: home.php");
}
die();