<?php 
require_once("cabecalho.php");
require_once("funcoes-produto.php");
require_once("class/Produto.php");
require_once 'funcoes-usuario.php';
verificaUsuario();

$produto = new Produto();
$produto->nome = $_POST['nomeproduto'];
$produto->nomeCliente = $_POST['nomecliente'];
$produto->precoCusto = $_POST['custo'];
$produto->custoFixo = $_POST['custofixo'];
$produto->custoVariavel = $_POST['custovariavel'];
$produto->icms = $_POST['icms'];
$produto->cofins = $_POST['cofins'];
$produto->lucro = $_POST['porcentagemlucro'];
$produto->resultado = $produto->resultado($produto->precoCusto,$produto->custoFixo,$produto->custoVariavel,$produto->icms,$produto->cofins,$produto->lucro);

header("Location: orcamentos.php");

if(insereProduto($conexao, $produto)) { ?>
	<p class="alert-success">O produto <?= $produto->nome ?>,foi salvo com sucesso.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $produto->nome ?> não foi salvo: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>