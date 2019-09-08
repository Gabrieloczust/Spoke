<?php require_once("funcoes-produto.php"); ?>
<?php require_once("cabecalho.php");
require_once 'funcoes-usuario.php';
verificaUsuario(); ?>
<title>Lista de Orçamentos</title>
<link href="css/orcamentos.css" rel="stylesheet" />
<?php require_once("menu.php")?>
<li class="scroll"><a href="home.php">Home</a></li>
<li class="scroll active"><a href="orcamentos.php">Orçamentos</a></li>
<li class="scroll"><a href="clientes.php">Clientes</a></li>
</ul>
</div>
</div>
<!--/.container-->
</nav>
<!--/nav-->
</header>
<!--/header-->

<table class="table table-striped">
	<tr class="tabela-titulos">
		<th>Nome do Produto</th>
		<th>Nome do Cliente</th>
		<th>Preço de Custo</th>
		<th>Custo Fixo</th>
		<th>Custo Variavel</th>
		<th>Icms</th>
		<th>Cofins</th>
		<th>Porcentagem de Lucro</th>
		<th class='text-primary'>Preço de Venda</th>
		<th></th>
	</tr>


	<?php
	$produtos = listaProdutos($conexao);
	foreach($produtos as $produto) :
	?>
	<tr>
		<td>
			<?= ucwords(strtolower($produto->nome)) ?>
		</td>
		<td>
			<?= ucwords(strtolower($produto->nomeCliente))?>
		</td>
		<td>
			<?= 'R$ ' . number_format($produto->precoCusto, 2,',','.') ?>
		</td>
		<td>
			<?= 'R$ ' .  number_format($produto->custoFixo, 2,',','.') ?>
		</td>
		<td>
			<?= 'R$ ' .  number_format($produto->custoVariavel, 2,',','.') ?>
		</td>
		<td>
			<?= number_format($produto->icms, 0,',','.') . '%'?>
		</td>
		<td>
			<?= number_format($produto->cofins, 0,',','.') . '%'?>
		</td>
		<td>
			<?= number_format($produto->lucro, 2,',','.')  . '%' ?>
		</td>
		<td class="text-primary">
			<?= 'R$ ' . number_format($produto->resultado($produto->precoCusto,$produto->custoFixo,$produto->custoVariavel,$produto->icms,$produto->cofins,$produto->lucro), 2,',','.') ?>
		</td>

		<!-- <td>
			<form action="produto-altera-formulario.php" method="post">
				<input type="hidden" name="id" value="?=$produto->id?>">
				<button class="botao botao-primary">Alterar</button>
			</form>
		</td> -->
		<td>
			<form action="remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto->id?>">
				<button class="botao botao-danger">Remover</button>
			</form>
		</td>
	</tr>
	<?php
	endforeach
	?>
</table>

<?php require_once("rodape.php"); ?>