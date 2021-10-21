<?php

require "conexao.php";

$tarefa_nome=$_POST['tarefa_nome'];
$tarefa_desc=$_POST['tarefa_desc'];
$tarefa_finaldata=$_POST['tarefa_finaldata'];
$tarefa_status=$_POST['tarefa_status'];
$tarefa_enviar=$_POST['tarefa_enviar'];



if($tarefa_enviar = "Enviar")
{
    if(strlen($tarefa_nome)>0 && strlen($tarefa_desc)>0 && strlen($tarefa_finaldata)>0)
    {
        try
        {
        $comando=$conexao->prepare("INSERT INTO rotina (NomeRotina,DescricaoRotina,DataRotina,StatusRotina) VALUES (?,?,?,?)");
        $comando->bindParam(1, $tarefa_nome);
        $comando->bindParam(2, $tarefa_desc);
        $comando->bindParam(3, $tarefa_finaldata);
        $comando->bindParam(4, $tarefa_status);

        if($comando->execute())
        {
          if($comando->rowCount()>0)
          {
              $tarefa_nome=null;
              $tarefa_desc=null;
              $email_finaldata=null;
  
              echo "<script>alert('Tarefa adicionada com sucesso!'); location= './Rotina.html';</script>";
          }
  
         else
          {
              echo "Erro ao tentar adicionar tarefa";
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
    else
    {
        echo "<script>alert('Uma ou mais areas ficaram em branco'); location= './Rotina.hmtl';</script>";
    }

}

?>