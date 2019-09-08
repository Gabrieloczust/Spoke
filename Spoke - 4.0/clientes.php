<?php require_once("funcoes-cliente.php");
require_once 'funcoes-usuario.php';
verificaUsuario(); ?>
<?php require_once("cabecalho.php"); ?>
<title>Lista de Clientes</title>
<link href="css/orcamentos.css" rel="stylesheet" />
<?php require_once("menu.php")?>
<li class="scroll"><a href="home.php">Home</a></li>
<li class="scroll"><a href="orcamentos.php">Orçamentos</a></li>
<li class="scroll active"><a href="clientes.php">Clientes</a></li>

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
		<th>Nome</th>
		<th>Sobrenome</th>
		<th>Email</th>
		<th>Telefone</th>
		<th>Data do Cadastro</th>
		<th></th>
	</tr>


	<?php
	$clientes = listaClientes($conexao);
	foreach($clientes as $cliente) :
	?>
	<tr>
		<td>
			<?= ucwords(strtolower($cliente->nome)) ?>
		</td>
		<td>
			<?= ucwords(strtolower($cliente->sobrenome)) ?>
		</td>
		<td>
			<?= strtolower($cliente->email) ?>
		</td>
		<td>
			<?= $cliente->telefone ?>
		</td>
		<td>
			<?= date('d/m/Y',  strtotime($cliente->data)) ?>
		</td>
		<!-- <td>
			<form action="cliente-altera-formulario.php" method="post">
				<input type="hidden" name="id" value="?=$cliente->id?>">
				<button class="botao botao-primary">Alterar</button>
			</form>
		</td> -->
		<td>
			<form action="remove-cliente.php" method="post">
				<input type="hidden" name="id" value="<?=$cliente->id?>">
				<button class="botao botao-danger">Remover</button>
			</form>
		</td>
	</tr>
	<?php
	endforeach
	?>
</table>

<?php require_once("rodape.php"); ?>