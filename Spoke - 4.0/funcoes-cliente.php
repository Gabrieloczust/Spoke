<?php
require_once("conecta.php");
require_once("class/Cliente.php");

function insereCliente($conexao, Cliente $cliente) {

	$query = "insert into clientes (nome, sobrenome, email, telefone, data_cadastro) 
		values ('{$cliente->nome}', '{$cliente->sobrenome}', '{$cliente->email}','{$cliente->telefone}', '{$cliente->data}')";

	return mysqli_query($conexao, $query);
}

function listaClientes($conexao) {

	$clientes = array();
	$resultado = mysqli_query($conexao, "select * from clientes");

	while($cliente_array = mysqli_fetch_assoc($resultado)) {
		$cliente = new cliente();
		$cliente->id = $cliente_array['id'];
		$cliente->nome = $cliente_array['nome'];
		$cliente->sobrenome = $cliente_array['sobrenome'];
		$cliente->email = $cliente_array['email'];
		$cliente->telefone = $cliente_array['telefone'];
		$cliente->data = $cliente_array['data_cadastro'];
		array_push($clientes, $cliente);
	}
	return $clientes;
}

function removeCliente($conexao, $id) {

	$query = "delete from clientes where id = {$id}";

	return mysqli_query($conexao, $query);
}	

