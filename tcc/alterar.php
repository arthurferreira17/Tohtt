<DOCTYPE html>
    <html>

<?php

include ("conexao.php");

if (isset($_GET["u"])):
    $id = $_GET["u"];
endif;

$listar = $conexao->prepare("SELECT * FROM rotina WHERE ID_Rotina='$id'");
$listar->execute();
$lista = $listar->fetch(PDO::FETCH_ASSOC);

if(isset($_POST["tarefa_enviar"])):
    $NomeRotina = $_POST["tarefa_nome"];
    $DescricaoRotina=$_POST['tarefa_desc'];
    $DataRotina=$_POST['tarefa_finaldata'];
    $StatusRotina=$_POST['tarefa_status'];

    $alterar = $conexao->prepare("UPDATE rotina SET NomeRotina='$NomeRotina', DescricaoRotina='$DescricaoRotina', DataRotina='$DataRotina', StatusRotina='$StatusRotina' WHERE ID_Rotina='$id'");
    $alterar->execute();

if($alterar):
    header("Location: Rotinax.php#tabela");
endif;

endif;

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
    


<section>
<div class="container">
<form id="form" method="POST" class="forms">
                    <div class="detalhes">
                        <div class="inputcaixa">
                            <span class="nomeTarefa">Nome da tarefa</span>
                            <input type="text" placeholder="Insira a identificação da sua tarefa" class="texto" id="tarefa_nome" name="tarefa_nome" value="<?php echo $lista["NomeRotina"]; ?>">
                        </div>
                        <div class="inputcaixa">
                            <span class="nomeTarefa">Descrição da tarefa</span>
                            <input type="text" placeholder="Insira a descrição da sua tarefa" class="texto" id="tarefa_desc" name="tarefa_desc"  value="<?php echo $lista["DescricaoRotina"]; ?>">
                        </div>
                        <div class="inputcaixa" >
                            <span class="nomeTarefa">Data final da sua tarefa</span>
                            <input class="form-control" type="datetime-local" id="tarefa_finaldata" name="tarefa_finaldata" value="<?php echo $lista["DataRotina"];?>">
                        </div>
                        <div class="inputstatus">
                            <span class="nomeTarefa">Status</span><br>
                            <select id="tarefa_status" name="tarefa_status" class="option texto">
                            <option value="pendente">Pendente</option>
                            <option value="em_andamento">Em andamento</option>
                            <option value="concluido">Concluido</option>
                            </select>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" id="tarefa_enviar" name="tarefa_enviar" value="Editar">
                    </div>
                </form>
</div>
</section>
<script src="<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>"></script>
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
                </body>
    </html>