<?php

include ("conexao.php");

$id = $_GET['q'];

$deletar = $conexao->prepare("DELETE FROM rotina WHERE ID_Rotina='$id'");
$deletar->execute();

if($deletar):
    header('Location: rotinax.php#tabela');
endif;
?>