<?php require_once("cabecalho.php");
require_once 'funcoes-usuario.php';
verificaUsuario(); ?>
    <title>Cadastro de Clientes | Spoke</title>
    <link rel="stylesheet" href="../Spoke - 4.0/css/login.css">
    <link rel="stylesheet" href="../Spoke - 4.0/css/cadastro.css">
<?php require_once("menu.php")?>
                        <li class="scroll"><a href="home.php">Home</a></li>
                        <li class="scroll"><a href="orcamentos.php">Orçamentos</a></li>
                        <li class="scroll"><a href="produto.php">Produto</a></li>
                        <li class="scroll"><a href="servico.php">Serviço </a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->

    <section id="get-in-touch">
        <div class="container">
            <div id="registro">

                <form action="adiciona-cliente.php" method="post" name="contact-form" id="main-contact-form">
                    <legend>Cadastro de Cliente</legend>
                    <div class="form-group">
                        <input type="text" required placeholder="Nome" maxlength="16" class="form-control" name="nome">
                    </div>
                    <div class="form-group">
                        <input type="text" required placeholder="Sobrenome" maxlength="32" class="form-control" name="sobrenome">
                    </div>
                    <div class="form-group">
                            <input type="email" required placeholder="Email" maxlength="64" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                            <input type="number" required placeholder="Telefone Celular" maxlength="16" class="form-control" name="telefone">
                    </div>
                    <button class="botao" id="btn-login" type="submit">Registrar</button>
                    <a class="btn" href="clientes.php">Lista de Clientes</a>
            </div>
            </form>
        </div>
    </section>
    <!--/#get-in-touch-->

<?php require_once ("rodape.php"); ?>
