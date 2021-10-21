<DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>TOHTT - Task Manager</title>
        <link rel="stylesheet" href="css/Style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
                            <!-- mudar para html -->
                            <li> <a href="cadastro.html">Cadastro</a>
                                <!-- mudar para html -->
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- corpo do site, o contéudo, as informações se encontram aqui -->
        <section>
<div class="content">
    <div class="info">
    <h2 > Acompanhe seu desempenho! </h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempore, enim provident quis fugit fuga illo dolor incidunt. Consequatur distinctio vitae quas. Consectetur pariatur eum ex repudiandae officia laborum esse.</p>
    </div>
</div>
        </section>
        <div class="content">
            <div class="info">
                <h2 id="descubra">
                    Tabela com suas informações pessoais de desempenho
                </h2>
                <p>Aqui você irá
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

        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            config = {
                dateFormat: "Y-m-d H:i",
                enableTime: true,
                altInput: true,
                altFormat: "F j, Y(H:S)",
            }
            flatpickr("input[type=datetime-local]", config);
        </script>
<script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>
    </body>

    </html>