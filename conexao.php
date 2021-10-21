<?php

$usuario = "root";
$senha = "";
$banco = "toht";

try 
{
    $conexao = new PDO("mysql:host=localhost; dbname=$banco","$usuario","$senha" );
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
}

catch(PDOException $erro)
{
    echo "Erro na conexão:" . $erro->getMessage();
}
