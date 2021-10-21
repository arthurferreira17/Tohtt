<?php

require "conexao.php";

$nome=$_POST['nome'];
$username=$_POST['username'];
$email=$_POST['email'];
$datanasc=$_POST['datanasc'];
$senha=$_POST['senha'];
$confirmsenha=$_POST['confirmsenha'];


$datanasc=implode("-",array_reverse(explode("/",$datanasc)));

if(strlen($nome)>0 && strlen($username)>0 && strlen($email)>0 && strlen($datanasc) && strlen($senha)>0 && strlen($confirmsenha)>0)
{
    if($senha != $confirmsenha)
    {
        echo "A senha não foi digitada corretamente";
    }
    else
    {
      try
      {
        $comando=$conexao->prepare("INSERT INTO cadastro (Nome,UserName,Email,DataNasc,Senha) VALUES (?,?,?,?,?)");
        $comando->bindParam(1, $nome);
        $comando->bindParam(2, $username);
        $comando->bindParam(3, $email);
        $comando->bindParam(4, $datanasc);
        $comando->bindParam(5, $senha);

        if($comando->execute())
        {
          if($comando->rowCount()>0)
          {
              $nome=null;
              $username=null;
              $email=null;
              $datanasc=null;
              $senha=null;
  
              echo "<script>alert('Cadastro efetuado com sucesso!'); location= './Index.html';</script>";
          }
  
         else
          {
              echo "Erro ao tentar efetivar cadastro";
          }
        }
        else
        {
            echo "Erro: Não foi possível executar o comando SQL";
        }
      }
      catch(PDOException $erro)
      {
        echo "Erro: " . $erro->getMessage();
      }
    }
}

else
{
    echo "Um ou mais campos do cadastro ficaram em branco!";
}



?>