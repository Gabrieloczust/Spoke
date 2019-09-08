<?php 
require_once 'funcoes-usuario.php';
verificaUsuario();
?>
<?php require_once("cabecalho.php") ?>
<title>Orçamento de Produtos | Spoke</title>
<link rel="stylesheet" href="css/produto.css">
<?php require_once("menu.php")?>
<li class="scroll"><a href="home.php">Home</a></li>
<li class="scroll"><a href="orcamentos.php">Orçamentos</a></li>
<li class="scroll"><a href="cadastro-cliente.php">Cadastro de Clientes</a></li>
</ul>
</div>
</div>
<!--/.container-->
</nav>
<!--/nav-->
</header>
<!--/header-->
<?php
require_once("funcoes-produto.php");
require_once 'class/Cliente.php';
require_once 'class/Conexao.php ';
$produto = new Produto();
$listaCliente = Cliente::listar();
?>
<div class="container-calculadora">
    <div class="container-970">
        <h1>Orçamento de Produto</h1>
        <div class="nomes">
            <form action="adiciona-produto.php" method="post">
                <div class="legenda">
                    <input class="legenda-input" type="text" class="nome-orcamento" placeholder="Nome do Produto"
                        maxlength="32" name="nomeproduto">
                </div>
                <div class="legenda">
                    <select class="legenda-input" name="nomecliente">
                        <?php foreach ($listaCliente as $linha): ?>
                        <option selected hidden>Selecione o Cliente</option>
                        <option value="<?php echo $linha['nome'] . ' '.  $linha['sobrenome'] ?>">
                            <?php echo ucwords(strtolower($linha['nome'])) . ' '.  ucwords(strtolower($linha['sobrenome'])) ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
        </div>

        <div class="calculadora">
            <input type="number" step="0.01" placeholder="Preço de Custo" class="custo" name="custo">
            <input type="number" step="0.01" placeholder="Custo Fixo" class="custo-fixo" name="custofixo">
            <input type="number" step="0.01" placeholder="Custo Variavel" class="custo-variavel" name="custovariavel">
            <input type="number" step="0.1" placeholder="Icms" class="icms" name="icms" value='18'>
            <input type="number" step="0.1" placeholder="Cofins" class="cofins" name="cofins" value='3'>
            <input type="number" step="0.01" placeholder="Porcentagem de Lucro" class="porcentagem-lucro" name="porcentagemlucro">
            <button class="acao">Calcular e Salvar</button>
            </form>
        </div>

    </div>
</div>
<?php require_once ("rodape.php"); ?>