<?php
require_once 'funcoes-usuario.php';
verificaUsuario();
require_once("funcoes-cliente.php"); 
$id = $_POST['id'];
removeCliente($conexao, $id);
header("Location: clientes.php");
die();
