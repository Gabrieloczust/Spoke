<?php require_once("cabecalho.php");
require_once 'funcoes-usuario.php';
verificaUsuario(); ?>
    <title>Orçamento de Serviços | Spoke</title>
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

    <div class="container-calculadora">
        <div class="container-970">
            <h1>Orçamento de Serviço</h1>
            <div class="nomes">
            <div class="legenda">
                <input class="legenda-input" type="text" class="nome-orcamento" placeholder="Nome do Serviço" maxlength="32">
            </div>
            <div class="legenda">
                <input class="legenda-input" type="text" class="nome-cliente" placeholder="Nome do Cliente" maxlength="32">
            </div>
        </div>

            <div class="calculadora">
                <input type="number" class="valor1" placeholder="Valor 1">
                <input type="number" class="valor2" placeholder="Valor 2">
                <input type="number" class="valor3" placeholder="Valor 3">
                <input type="number" class="valor4" placeholder="Valor 4">
                <input type="number" class="valor5" placeholder="Valor 5">
                <input type="number" class="valor6" placeholder="Valor 6">
            </div>
            <input type="button" value="Calcular e Salvar" id="salvar" class="acao">
        </div>
    </div>
<?php require_once ("rodape.php"); ?>
