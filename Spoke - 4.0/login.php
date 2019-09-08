<?php require_once("cabecalho.php"); require_once 'funcoes-usuario.php';?>
<meta name="description" content="Login - Faça o login e acessa a Calculadora de Orçamentos">
<title>Login | Spoke</title>
<link rel="stylesheet" href="../Spoke - 4.0/css/login.css">
<?php require_once("menu.php");
if(!usuarioEstaLogado()) {
?><li class="scroll active"><a href="login.php">Login</a></li>
<li class="scroll"><a href="cadastro.php">Cadastro </a></li><?php } ?>
</ul>
</div>
</div>
<!--/.container-->
</nav>
<!--/nav-->
</header>
<!--/header-->
<?php
if(usuarioEstaLogado()) {
?>
<section id="get-in-touch">
    <div class="container">
        <div id="login">
            <h2 class="text-success text-center">Você está logado com
                <?= '<br>' .ucwords(usuarioLogado())?></h2>
                <div class="btn-deslogar"><a href="home.php" class="btn btn-voltar">Voltar</a>
                <a href="logout.php" class="btn btn-danger danger-deslogar">Deslogar</a></div>
        </div>
    </div>
</section>

    <?php
} else {
?>
    <section id="get-in-touch">
        <div class="container">
            <div id="login">

                <form action="efetuar-login.php" method="post" id="main-contact-form">
                    <div class="form-group">
                        <input type="text" required placeholder="Usuario" maxlength="16" class="form-control uppercase"
                            name="usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" required placeholder="Senha" maxlength="8" class="form-control uppercase"
                            name="senha">
                    </div>
                    <div class="group-botao">
                        <a href="cadastro.php">
                            <div class="botao" id="btn-registro">Registre-se!
                            </div>
                        </a>
                    </div>
                    <button class="botao" id="btn-login" type="submit">Entrar</button>
            </div>
            <div class="problem-group">
                <p><a href="#">Esqueci meu login e/ou senha</a><br></p>
            </div>
            </form>
        </div>


        </div>


        </div>
    </section>
    <!--/#get-in-touch-->

    <?php } require_once ("rodape.php"); ?>