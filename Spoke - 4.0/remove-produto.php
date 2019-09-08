<?php
require_once 'funcoes-usuario.php';
verificaUsuario();
require_once("funcoes-produto.php"); 
$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: orcamentos.php");
die();
