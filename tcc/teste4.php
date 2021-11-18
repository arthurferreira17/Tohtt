<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Teste 4</title>
        <link rel="stylesheet" href="css/Style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <style>
            table, tr, td{
                border: 1px solid #001C3A;
                border-radius: 2px;
                border-collapse: collapse;
                border-bottom: 1px solid black;
                font-size: 24px;
                font-weight: 500;
                text-align: justify;
                font-style: bold;
                background-color: #fff;
                font-family:'Barlow Condensed';
            }
            th{
                background-color: #011c3a;
                color: #fff;
                font-style: bold;
                padding-top: 5px;
                padding-bottom: 5px;
                padding: 10px;
            }
            tr:hover{
                background-color: #0D4E85;
                transition: .4s;
            }
            td:hover{
                background-color: #0D4E85;
                color: #fff;
                transition: .3s;
            }

            td #par{
                border: 1px solid #001C3A;
                border-radius: 2px;
                border-collapse: collapse;
                border-bottom: 1px solid black;
                width: 80vw;
                font-size: 24px;
                text-align: justify;
                font-style: bold;
                background-color: #000;
                font-family:'Barlow Condensed';
            }
        </style>
    <body>


    <?php
    //Recebe os dados do formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    ?>



<div class="home_content">
    <div class="container">
<div class="detalhes">
<form method="POST" action="" class="forms">
        <?php
        $data_inicio = "";
        if (isset($dados['data_inicio'])) {
            $data_inicio = $dados['data_inicio'];
        }
        ?>
<div class="inputcaixa">
<span class="nomeTarefa">Data de inicio</span>
        <input class="form-control texto" type="date" name="data_inicio" value="<?php echo $data_inicio; ?>"><br><br>
</div>

        <?php
        $data_final = "";
        if (isset($dados['data_final'])) {
            $data_final = $dados['data_final'];
        }
        ?>
<div class="inputcaixa">
<span class="nomeTarefa">Data final</span>
        <input class="form-control texto" type="date" name="data_final" value="<?php echo $data_final; ?>"><br><br>
</div>

        <div class="button">
        <input type="submit" value="Pesquisar" name="PesqEntreData"><br><br>
        </div>

    </form>
</div>
    </div>
</div>
<br>
<div class="home_content">
<table> 
            <tr>
                <th>ID Rotina</th>
                <th>Nome tarefa</th>
                <th>Data da tarefa</th>
            </tr>


    <?php
    //Verifica se o usuário clicou no botão
    if (!empty($dados['PesqEntreData'])) {
        //var_dump($dados);
        $query_usuarios = "SELECT ID_Rotina, NomeRotina, DataRotina FROM rotina WHERE DataRotina BETWEEN :data_inicio AND :data_final";
        $result_usuarios = $conexao->prepare($query_usuarios);
        $result_usuarios->bindParam(':data_inicio', $dados['data_inicio']);
        $result_usuarios->bindParam(':data_final', $dados['data_final']);
        $result_usuarios->execute();

        while($lista =$result_usuarios->fetch(PDO::FETCH_ASSOC)):
            ?>
            <tr>
                <td><?php echo $lista["ID_Rotina"]; ?></td>
                <td><?php echo $lista["NomeRotina"]; ?></td>
                <td><?php echo $lista["DataRotina"]; ?></td>
            </tr>
            <?php
            endwhile; }?>
        </table>
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
                <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
            <script>
                config = {
                    dateFormat: "Y-m-d H:i",
                    enableTime: true,
                    altInput: true,
                    altFormat: "J F, Y(H:i)",
                }
                flatpickr("input[type=date]", config);
            </script>
    </body>
    </html>