<DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>TOHTT - Task Manager</title>
        <link rel="stylesheet" href="css/Style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
        <!-- HEADER AQUI SE ENCONTRA O MENU DE NAVEGAÇÃO -->
        <div class="sidebar">
            <div class="logo_content">
                <div class="logo">
                    <i class='bx bxs-pen'></i>
                    <div class="logo_name">Toht</div>
                </div>
                <i class='bx bx-menu' id="btn"></i>
            </div>
            <ul class="nav_list">
                <li>
                    <a href="#">
                        <i class='bx bx-search'></i>
                        <input type="text" placeholder="Pesquise...">
                    </a>
                    <span class="tooltip"> Pesquisa</span>
                </li>
                <li>
                    <a href="Index.html"><i class='bx bx-home-alt' ></i>
                    <span class="links_name">Home</span></a>
                    <span class="tooltip">Home</span>
                </li>
                <li>
                    <a href="Rotinax.php"><i class='bx bx-calendar' ></i>
                    <span class="links_name">Rotina</span></a>
                    <span class="tooltip">Crie suas rotinas</span>
                </li>
                <li>
                    <a href="Desempenho.php"><i class='bx bxs-bar-chart-alt-2' ></i>
                    <span class="links_name">Desempenho</span></a>
                    <span class="tooltip">Seu desempenho</span>
                </li>
                <li>
                    <a href="Conquistas.php"><i class='bx bxs-medal' ></i>
                    <span class="links_name">Conquistas</span></a>
                    <span class="tooltip">Veja suas conquistas</span>
                </li>
                <li>
                    <a href="Estudos.html"><i class='bx bxs-book-content' ></i>
                    <span class="links_name">Estudos</span></a>
                    <span class="tooltip">Estudos</span>
                </li>
                <li>
                    <a href="Login.html"><i class='bx bx-user-circle' ></i>
                    <span class="links_name">Login</span></a>
                    <span class="tooltip">Faça login/cadastro</span>
                </li>
            </ul>
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                        <img src="img/ricardo.png" alt="">
                        <div class="name_job">
                            <div class="name">Ricardo</div>
                            <div class="job">Estudante</div>
                        </div>
                    </div>
                    <i class='bx bx-log-out' id="log_out"></i>
                </div>
            </div>
        </div>
        <center>
            <div class="container-vazio"></div>
<div class="home_content">
<div class="caixa-forma">
                <div class="caixa">
                    <forms action="#" class="forms">
                        <div class="conteudo">
                            <br>
                            <label for="user" class="inputlbl">Insira seu e-mail para recuperação</label>
                            <br>
                            <input type="e-mail" class="input " id="user" placeholder="...">
                        </div>
                        <br>

                        </label> <a href="#" class="btn form-btn btn-forma">Enviar</a>

                    </forms>
                </div>
            </div>
</div>
            <div class="container-vazio"></div>
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
        <script>
            let btn = document.querySelector("#btn");
            let sidebar = document.querySelector(".sidebar");
            let searchBtn = document.querySelector(".bx-search");
            btn.onclick = function() {
                sidebar.classList.toggle("active");
            }
            searchBtn.onclick = function() {
                searchBtn.classList.toggle("active");
            }
        </script>
        
    </body>

    </html>