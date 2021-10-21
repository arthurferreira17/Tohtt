<DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="vizu" content="width=device-width, initial-scale=1.0">
        <title>TOHT - Task Manager</title>
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
                <a href="#" class="logo">Logo</a>
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
                            <li> <a href="Cadastro.php">Cadastro</a>
                                <!-- mudar para phphphph -->
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- corpo do site, o contéudo, as informações se encontram aqui -->
        </center>
        <section>
            <div class="content">
                <div class="info">
                    <h2>Suas conquistas!</h2>
                    <p>Aqui você poderá verificar metas estabelecidas pela nossa equipe baseadas inteiramente no seu desempenho! Não precisa esquentar a cabeça, não há pressão nesta aba, é apenas uma maneira de eternizar o seu progresso de acordo com o seu ritmo de produção.</p>
                    <a href="#descubra" class="info-btn">PROGRESSO</a>
                </div>
            </div>
        </section>
        <div class="content">
            <div class="info">
                <h2 id="descubra">
                    Tabela de conquistas + tabela + for 
                </h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam tempora sit nemo libero culpa blanditiis, molestias ab, harum repellendus eum laborum quam a praesentium nam distinctio qui, quae nostrum ea!

                </p>
            </div>
        </div>

        <!-- FOOTER AQUI SE ENCONTRA O FOOTER DO SITE + REDES SOCIAIS + CONTATO + COPYRIGHT -->
        <footer>
            <div class="footer-container">
                <div class="footer">
                    <div class="footer-heading footer-1">
                        <h2>Nossas redes sociais</h2>
                        <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                        <a href="#"><i class="fab fa-twitter"></i > Twitter</a>
                        <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#"><i class="fab fa-discord"></i> Discord</a>
                        <a href="https://www.youtube.com/watch?v=4Wyne-yGVxM"><i class="fab fa-reddit"></i> Reddit</a>
                    </div>
                    <div class="footer-heading footer-2">
                        <h2>Sobre nós</h2>
                        <a href="#">Nosso Propósito</a>
                        <a href="#">Suporte</a>
                        <a href="#">Contato</a>
                        <a href="#">Termos de serviço</a>
                    </div>

                    <div class="footer-email-form">
                        <h2>Receba nossas novidades!</h2>
                        <input type="email" placeholder="Insira teu e-mail" id="footer-email">
                        <input type="submit" value="Enviar" id="footer-email-btn">
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.js"></script>
        <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>
    </body>

    </html>