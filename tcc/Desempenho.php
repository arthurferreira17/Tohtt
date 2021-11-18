<DOCTYPE html>
    <html>
    <?php

include "conexao.php";
$S = 0;
$E = 0;
$X = 0;
$T = 0;
?>
    <head>
        <meta charset="utf-8">
        <title>TOHTT - Task Manager</title>
        <link rel="stylesheet" href="css/Style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
        <!-- corpo do site, o contéudo, as informações se encontram aqui -->
        <div class="home_content">
<section>
            <div class="content">
                <div class="info">
                    <h2>Seu desempenho!</h2>
                    <p>Aqui você irá ver suas estatisticas em relação a suas tarefas e o quão bem você está conseguindo manusear a sua rotina!</p>
                    <a href="#descubra" class="info-btn">Acompanhe</a>
                </div>
            </div>
        </section>
</div>
<div class="home_content">
<div class="content">
            <div class="info">
                <h2 id="descubra">
                    Seu desempenho!
                </h2>
            </div>
        </div>
</div>
<div class="home_content">
<div class="content">
            <div class="info">
            <?php 
                $listagem2 = $conexao->prepare("SELECT * from rotina where StatusRotina ='pendente'");
                $listagem2->execute();
                while($lista2 =$listagem2->fetch(PDO::FETCH_ASSOC)):
                $X++;?>
                 <?php endwhile; ?>
                <p>Atividades pendentes: <?php echo $X; ?>
                </p>
                <br>
                <?php 
                $listagem1 = $conexao->prepare("SELECT * from rotina where StatusRotina ='em_andamento'");
                $listagem1->execute();
                while($lista1 =$listagem1->fetch(PDO::FETCH_ASSOC)):
                $E++;?>
                 <?php endwhile; ?>
                
                <p>Atividades em andamento: <?php echo $E; ?>
                </p>
                <br>
                <?php
                           $listagem3 = $conexao->prepare("SELECT * FROM rotina where StatusRotina ='concluido'");
                           $listagem3->execute();
                          while($lista3 =$listagem3->fetch(PDO::FETCH_ASSOC)):
                               $T++;
                ?>
                                <?php
            endwhile; ?>
                <p>Atividades concluidas: <?php echo $T; ?>
                </p>
                <br>
                <?php
                            $listagem = $conexao->prepare("SELECT * FROM rotina");
                            $listagem->execute();
                            while($lista =$listagem->fetch(PDO::FETCH_ASSOC)):
                                $S++;
                ?>
                                <?php
            endwhile; ?>
                <p>Atividades no total: <?php echo $S; ?>
                </p>
                <br>
                <h2>Gráfico de apoio: 
                </h2>
                <div class="wrapper">
        <div class="container1 d-flex flex-column justify-content-center align-items-center">
            <div class="chart-wrapper">
                <canvas id="myChart" width="600px" height="600px"></canvas>
            </div>
        </div>
    </div>
                <br>
            </div>
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
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script>
        let ctx = document.getElementById('myChart').getContext('2d');
let labels = ['Tarefas completas', 'Tarefas em andamento', 'Tarefas pendentes'];
let colorHex = ['#001c3a', '#295687', '#a1aab3'];

let myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        datasets: [{
            data: [<?php echo $T; ?>,  <?php echo $E; ?>, <?php echo $X; ?>],
            backgroundColor: colorHex
        }],
        labels: labels
    },
    options: {
        responsive: true,
        legend: {
            position: 'bottom'
        },
        plugins: {
            datalabels: {
                color: '#000',
                anchor: 'end',
                align: 'start',
                offset: -10,
                borderWidth: 1,
                borderColor: '#000',
                borderRadius: 25,
                backgroundColor: (context) => {
                    return context.dataset.backgroundColor;
                },
                font: {
                    weight: 'bold',
                    size: '18'
                },
                formatter: (value) => {
                    return value + ' %';
                }
            }
        }
    }
})
    </script>
        
        
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