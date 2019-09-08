<?php require_once("cabecalho.php") ?>
    <meta name="description" content="Cadastra-se para acessar todo o conteudo da Calculadora de Orçamentos!">
    <title>Cadastro | Spoke</title>
    <link rel="stylesheet" href="../Spoke - 4.0/css/login.css">
    <link rel="stylesheet" href="../Spoke - 4.0/css/cadastro.css">
<?php require_once("menu.php")?>
                        <li class="scroll"><a href="login.php">Login</a></li>
                        <li class="scroll active"><a href="cadastro.php">Cadastro </a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->
    <?php
require_once 'funcoes-usuario.php';
if(usuarioEstaLogado()) {
header("Location:login.php");}
?>
    <section id="get-in-touch">
        <div class="container">
            <div id="registro">

                <form action="adiciona-usuario.php" method="post" name="contact-form" id="main-contact-form">
                    <legend>Cadastro</legend>
                    <div class="form-group">
                        <input type="text" required placeholder="Usuario" maxlength="16" class="form-control uppercase"
                            name="nick">
                    </div>
                    <div class="form-group">
                        <input type="email" required placeholder="Email" maxlength="64" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" required placeholder="Senha" maxlength="16" class="form-control uppercase"
                            name="senha">
                    </div>
                    <div class="form-group">
                        <input type="password" required placeholder="Confirmar Senha" maxlength="16" class="form-control uppercase"
                            name="confirmarsenha">
                    </div>
                    <div class="form-group">
                        <input type="text" required placeholder="Nome" maxlength="16" class="form-control" name="nome">
                    </div>
                    <div class="form-group">
                        <input type="text" required placeholder="Sobrenome" maxlength="32" class="form-control" name="sobrenome">
                    </div>
                    <div class="form-group">
                        <select id="estado" class="form-control" name="estado"></select>
                    </div>

                    <div class="form-group">
                        <select id="cidade" class="form-control" name="cidade"></select>
                    </div>


                    <button class="botao" id="btn-login" type="submit">Registrar</button>
            </div>
            </form>
        </div>
    </section>
    <!--/#get-in-touch-->
    <script src="../Spoke - 4.0/js/cidade-estado.js"></script>
    <script src="../Spoke - 4.0/js/cidade-estado.js"></script>
    <script>
        new dgCidadesEstados({
            cidade: document.getElementById('cidade'),
            estado: document.getElementById('estado')
        })
    </script>
<?php require_once ("rodape.php"); ?>
