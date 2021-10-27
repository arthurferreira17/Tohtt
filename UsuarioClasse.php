<?php

class Usuario{

    public function login($user,$senha){
        global $conexao;

        $sql = "Select * FROM cadastro WHERE UserName = :user AND Senha = :senha";
        $sql = $conexao->prepare($sql);
        $sql->bindValue("user", $user);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){

            $dado = $sql->fetch();


           $_SESSION['iduser'] = $dado['ID_Usuario'];
           return true;
        }else{
            return false;
        }

    }
}

?>