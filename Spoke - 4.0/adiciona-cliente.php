<?php 
require_once("cabecalho.php");
require_once("funcoes-cliente.php");
require_once 'funcoes-usuario.php';
verificaUsuario();
require_once("class/Cliente.php");
date_default_timezone_set('Brazil/East');


$cliente = new Cliente();
$cliente->nome = $_POST['nome'];
$cliente->sobrenome = $_POST['sobrenome'];
$cliente->email = $_POST['email'];
$cliente->telefone = $_POST['telefone'];
$cliente->data = date('y/m/d');

header("Location: clientes.php");

if(insereCliente($conexao, $cliente)) { ?>
	<p class="alert-success">O cliente <?= $cliente->nome ?>,foi cadastrado com sucesso.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O cliente <?= $cliente->nome ?> não foi cadastrado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>