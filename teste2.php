<!DOCTYPE html>
<html>
<?php

include "conexao.php";
require "UsuarioClasse.php";

$u = new Usuario();


?>


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
        </style>

<?php

if (isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['senha']) && !empty($_POST['senha']))
{
    $user = addslashes($_POST['user']);
    $senha = addslashes($_POST['senha']);
    
    if($u->login($user,$senha) == true){
        if(isset($_SESSION['iduser'])){
            echo "<script>alert('Login efetuado com sucesso!'); location= './Index.html';</script>";
        }else{
            header("Location: Login.html");
        }


    }else{
        header("Location: Login.html");
    }


}else{
    header("Location: Login.html");
}



?>


    </body>
</html>