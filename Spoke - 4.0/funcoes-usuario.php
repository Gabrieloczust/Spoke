<?php
require_once("conecta.php");
require_once("class/Usuario.php");

function insereUsuario($conexao, Usuario $usuario) {

	$query = "insert into usuarios (usuario, email, senha, nome, sobrenome, estado, cidade, data_cadastro) 
		values ('{$usuario->nick}', '{$usuario->email}', '{$usuario->senha}','{$usuario->nome}', '{$usuario->sobrenome}', '{$usuario->estado}', '{$usuario->cidade}' ,'{$usuario->data}')";

	return mysqli_query($conexao, $query);
}

function buscaUsuario($conexao, $usuario, $senha) {

	$senhaMd5 = md5($senha);
	$usuario = mysqli_real_escape_string($conexao, $usuario);
	$query = "select usuario,senha from usuarios where usuario='{$usuario}' and senha='{$senhaMd5}'";
	$resultado = mysqli_query($conexao, $query);
	$NovoUsuario = mysqli_fetch_assoc($resultado);
	return $NovoUsuario;
	echo '<pre>';
echo var_dump($NovoUsuario);
}

?>

<?php
session_start();

function usuarioEstaLogado() {
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
	if(!usuarioEstaLogado()) {
		$_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
		header("Location: login.php");
		die();
	}
}

function usuarioLogado() {
	return $_SESSION["usuario_logado"];
}

function logaUsuario($usuario) {
	$_SESSION["usuario_logado"] = $usuario;
}

function logout() {
	session_destroy();
	session_start();
}