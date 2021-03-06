<DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>TOHTT - Task Manager</title>
        <link rel="stylesheet" href="css/Style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    </head>

    <body>
        <!-- HEADER AQUI SE ENCONTRA O MENU DE NAVEGAÇÃO -->
        <header>
            <input type="checkbox" id="bt_menu">
            <label for="bt_menu"><span class="menuburgue"><i class="fas fa-bars"></i></span></label>
            <nav class="menu">
                <ul>
                    <li><a href="Index.html" target="exibir"> Home </a></li>
                    <li><a href="Rotina.php" target="exibir"> Rotina </a></li>
                    <li><a href="Desempenho.php" target="exibir">Desempenho </a></li>
                    <li><a href="Estudos.html" target="exibir">Estudos </a></li>
                    <li><a href="Conquistas.php" target="exibir">Conquistas </a></li>
                    <li>
                        <a href="#" target="exibir"><i class="fas fa-user"></i> </a>
                        <ul>
                            <li><a href="Login.php">Login</a></li>
                            <!-- mudar para phphpphpphp -->
                            <li> <a href="cadastro.html">Cadastro</a>
                                <!-- mudar para phphphph -->
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <center>
            <div class="container-vazio"></div>
            <div class="caixa-forma2">
                <div class="caixa">
                    <forms action="#" class="forms">
                        <div class="conteudo">
                            <label for="user" class="inputlbl">Usuário</label>
                            <input type="text" class="input " id="user" placeholder="...">
                        </div>
                        <div class="conteudo">
                            <label for="senha" class="inputlbl">Senha</label>
                            <input type="password" class="input " id="senha" placeholder="...">
                        </div>
                        <br>
                        <input type="checkbox" class="checkbox" id="remember"></input>
                        <label for="lembrar" class="manter">Manter conectado</label>
                        <br>
                        <a href="Login.php" class="btn btn-forma">Login</a> <br>
                        <a href="Cadastro.html" class="btn btn-forma">Cadastrar</a>
                        <br>
                        <br>
                        <a href="RecLogin.php" class="btn esqueceu">Esqueceu a senha?</a>
                    </forms>
                </div>
            </div>
            <div class="container-vazio"></div>
        </center>
        </div>
        <!-- FOOTER AQUI SE ENCONTRA O FOOTER DO SITE + REDES SOCIAIS + CONTATO + COPYRIGHT -->
        <footer>
            <div class="footer-container">
                <div class="footer">
                    <div class="footer-heading footer-1">
                        <h2>Nossas redes sociais</h2>
                        <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                        <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                        <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#"><i class="fab fa-discord"></i> Discord</a>
                        <a href="#"><i class="fab fa-reddit"></i> Reddit</a>
                    </div>
                    <div class="footer-heading footer-2">
                        <h2>Sobre nós</h2>
                        <a href="#">Nosso Propósito</a>
                        <a href="#">Suporte</a>
                        <a href="#">Contato</a>
                        <a href="#">Termos de serviço</a>
                    </div>
                    <div class="foother-email-form">
                        <h2>Receba nossas novidades!</h2>
                        <input type="email" placeholder="Insira teu e-mail" id="footer-email">
                        <input type="submit" value="Enviar" id="footer-email-btn">
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>
    </body>

    </html>