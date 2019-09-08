<?php 
require_once("cabecalho.php");
require_once("funcoes-usuario.php");
require_once("class/Usuario.php");
date_default_timezone_set('Brazil/East');


$usuario = new Usuario();
$usuario->nick = $_POST['nick'];
$usuario->email = $_POST['email'];
$usuario->senha = md5($_POST['senha']);
$usuario->confirmarsenha = $_POST['confirmarsenha'];
$usuario->nome = $_POST['nome'];
$usuario->sobrenome = $_POST['sobrenome'];
$usuario->estado = $_POST['estado'];
$usuario->cidade = $_POST['cidade'];
$usuario->data = date('y/m/d');


header("Location: login.php");

if(insereUsuario($conexao, $usuario)) { ?>
	<p class="alert-success">O usuario <?= $usuario->nome ?>,foi salvo com sucesso.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O usuario <?= $usuario->nome ?> não foi salvo: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>