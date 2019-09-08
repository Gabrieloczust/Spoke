<?php
require_once("conecta.php");
require_once("class/Produto.php");

function insereProduto($conexao, Produto $produto) {

	$query = "insert into produtos (nomeproduto, nomecliente, custo, custofixo, custovariavel, icms, cofins, porcentagemlucro, resultado) 
		values ('{$produto->nome}', '{$produto->nomeCliente}', {$produto->precoCusto}, 
			{$produto->custoFixo}, {$produto->custoVariavel}, {$produto->icms}, {$produto->cofins}, {$produto->lucro}, {$produto->resultado})";

	return mysqli_query($conexao, $query);
}

function listaProdutos($conexao) {

	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from produtos");

	while($produto_array = mysqli_fetch_assoc($resultado)) {
		$produto = new Produto();
		$produto->id = $produto_array['id'];
		$produto->nome = $produto_array['nomeproduto'];
		$produto->nomeCliente = $produto_array['nomecliente'];
		$produto->precoCusto = $produto_array['custo'];
		$produto->custoFixo = $produto_array['custofixo'];
		$produto->custoVariavel = $produto_array['custovariavel'];
		$produto->icms = $produto_array['icms'];
		$produto->cofins = $produto_array['cofins'];
		$produto->lucro = $produto_array['porcentagemlucro'];
		$produto->resultado = $produto_array['resultado'];
		array_push($produtos, $produto);
	}
	return $produtos;
}

function removeProduto($conexao, $id) {

	$query = "delete from produtos where id = {$id}";

	return mysqli_query($conexao, $query);
}	