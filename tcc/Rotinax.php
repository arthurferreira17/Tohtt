<DOCTYPE html>
    <html>
    <?php

include "conexao.php";
$S = 0;
?>

    <head>
        <meta charset="utf-8">
        <title>TOHT - Task Manager</title>
        <link rel="stylesheet" href="css/Style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
    <style>
            table, tr, td{
                border: 1px solid #001C3A;
                border-radius: 2px;
                border-collapse: collapse;
                border-bottom: 1px solid black;
                font-size: 24px;
                text-align: justify;
                font-style: bold;
                background-color: #fff;
                font-family:'Barlow Condensed';
            }

            tr{
                height: 25%;
                padding-left: 10px;
                align-items: center;
                justify-content: center;
            }
            th{
                background-color: #011c3a;
                color: #fff;
                font-style: bold;
                padding-top: 5px;
                padding-bottom: 5px;
                padding: 10px;
            }
        


        </style>
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
        <!-- corpo do site, o contéudo, as informações se encontram aqui -->


        <center>
            <div class="container-vazio"></div>
<div class="home_content">
<div class="container">
                <div class="titulo">Adicionando nova tarefa</div>
                <form id="form" action="Rotina.php" method="POST" class="forms">
                    <div class="detalhes">
                        <div class="inputcaixa">
                            <span class="nomeTarefa">Nome da tarefa</span>
                            <input type="text" placeholder="Insira a identificação da sua tarefa" class="texto" id="tarefa_nome" name="tarefa_nome">
                        </div>
                        <div class="inputcaixa">
                            <span class="nomeTarefa">Descrição da tarefa</span>
                            <input type="text" placeholder="Insira a descrição da sua tarefa" class="texto" id="tarefa_desc" name="tarefa_desc">
                        </div>
                        <div class="inputcaixa">
                            <span class="nomeTarefa">Data final da sua tarefa</span>
                            <input class="form-control" type="datetime-local" id="tarefa_finaldata" name="tarefa_finaldata">
                        </div>
                        <div class="inputstatus">
                            <span class="nomeTarefa">Status</span><br>
                            <select id="tarefa_status" name="tarefa_status" class="option texto">
                            <option value="pendente">Pendente</option>
                            <option value="em_andamento">Em andamento</option>
                            </select>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" id="tarefa_enviar" name="tarefa_enviar" value="Enviar">
                    </div>
                </form>
            </div>
</div>
        </center>
        <div class="container-vazio"></div>
<div class="home_content">
<div class="content">
            <div class="info">
                <h2>
                    Rotina
                </h2>
                <p>
                    Acompanhe de perto sua rotina e mantenha sempre sua agenda organizada para evitar problemas futuros!
                    
                </p>
                <table id="tabela"> 
            <tr>
                <th>Nome tarefa</th>
                <th>Descrição da tarefa</th>
                <th>Data da tarefa</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>

            <?php 
            $listagem = $conexao->prepare("SELECT * FROM rotina");
            $listagem->execute();
            
            while($lista =$listagem->fetch(PDO::FETCH_ASSOC)):
            $S++;
            ?>
            <tr>
                <td><?php echo $lista["NomeRotina"]; ?></td>
                <td><?php echo $lista["DescricaoRotina"]; ?></td>
                <td><?php echo $lista["DataRotina"]; ?></td>
                <td><?php echo $lista["StatusRotina"]; ?></td>
                <td>
                    <a href="alterar.php?u=<?php echo $lista["ID_Rotina"] ?>"><i class='bx bx-cog'></i></a>
                    <a id="q" href="deletar.php?q=<?php echo $lista["ID_Rotina"] ?>"><i class='bx bx-window-close'></i></a>
                </td>
            </tr>
            <?php
            endwhile; ?>
        </table>
            </div>
        </div>
</div>



<div class="home_content">

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

            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
            <script>
                config = {
                    dateFormat: "Y-m-d H:i",
                    enableTime: true,
                    altInput: true,
                    altFormat: "J F, Y(H:i)",
                }
                flatpickr("input[type=datetime-local]", config);
            </script>
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