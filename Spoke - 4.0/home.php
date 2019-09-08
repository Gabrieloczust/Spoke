<?php require_once("cabecalho.php"); ?>
    <meta name="description" content="Home - Calculadora para efetuar orçamentos de preços de venda de produtos e serviços.">
    <title>Home</title>
<?php require_once("menu.php");
require_once 'class/Usuario.php';
require_once 'funcoes-usuario.php';
verificaUsuario();
$usuario = new Usuario();?>
                        <li class="scroll"><a href="orcamentos.php">Orçamentos</a></li>
                        <li class="scroll"><a href="clientes.php">Clientes</a></li>
                        <?php if(!usuarioLogado()){ ?>
                        <li class="scroll"><a href="login.php">Login</a></li>
                        <?php }?>
                        <li class="active nome-usuario"><a href="login.php">Bem-Vindo <?php echo ucwords(usuarioLogado()) ?></a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->

    <section id="funcionalidades">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Orçamentos de produtos e serviços</h2>
                <p class="text-center wow fadeInDown">Dica: Faça o cadastro de clintes antes de realizar os orçamentos
                    para obter um melhor desempenho!</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <a href="produto.php">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <img src="../../Empresa Spoke/images/icon0.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Orçamento de <span class="color">Produtos</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        ing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit
                                        amet,
                                        consectetur adipis
                                        ing elit, sed do eiusmod .</p>
                                    <div class="saiba-mais botao botao-primary">Calcular</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <a href="servico.php">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <img src="../../Empresa Spoke/images/icon0.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Orçamento de <span class="color">Serviços</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        ing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit
                                        amet,
                                        consectetur adipis
                                        ing elit, sed do eiusmod .</p>
                                    <div class="saiba-mais botao botao-primary">Calcular</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <a href="../Spoke - 4.0/cadastro-cliente.php">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <img src="../../Empresa Spoke/images/icon2.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Cadastro de Clientes</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        ing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit
                                        amet,
                                        consectetur adipis
                                        ing elit, sed do eiusmod .</p>
                                    <div class="saiba-mais botao botao-danger">Cadastrar</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->
<?php require_once("rodape.php"); ?>