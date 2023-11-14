<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="IMAGES-ICONS/support-icon.ico" type="image/x-icon">
    <title>Sistema de chamados</title>
</head>

<body>
    <!-- <style>
 @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

    body{
    background: #9E5AFF;
    display: flex;
    justify-content: center;
    height: 100dvh;
    align-items: center;
    }

    main {
    display: flex;
    justify-content: center;
}

    .container {
    display: grid;
    column-gap: 70px;
    grid-template-columns: 1fr 1fr;
    border-radius: 15px;
    background: #FFF;
    padding: 40px 50px;
    grid-column: 1/2;
    width: 70%;
    align-items:center;
}

    p{    margin-bottom: 30px;
         font-family: 'Inter', sans-serif;
         font-weight: 900;
        font-size: 55px;
        text-align: center;
        
    }

    .input-button {
    margin-top: 15px;
    /*padding: 8px 50px;*/
    font-family: 'Inter', sans-serif;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    font-size: large;
    width: 300px;
    height: 50px;
  }
  
  .input-button:hover {
    transform: translateY(-3px);
    background-color: rgb(128, 95, 247);
  }

  .botao{
display:flex;
justify-content:center;

  }


  @media screen and (max-width:768px) {
    



    .botao {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
       
    }

    .container {
        display: block;
        width: 90%;
        height:14.5cm;
       
        
    }

    p {
        font-size: 34px;
        text-align: center;
    }

    .input-button {
    
    width: 200px;
    height: 50px;
    font-size:small;

    }

    

    }




    </style>-->
</body>

</html>


<?php
include "conexao.php";

class chamadosDao
{
    //CRUD - create, read, update, delete
    //create
    public function cadastrar(chamados $c)
    {
        $sql0 = "insert into chamados (email, desc_problema, lugar, tipo_problema, tipo_user, status) values (?,?,?,?,?,?)";

        $bd = new Conexao();
        $conn = $bd->getConexao();

        $v0 = $conn->prepare($sql0);
        $v0->bindValue(1, $c->getEmail());
        $v0->bindValue(2, $c->getDesc_problema());
        $v0->bindValue(3, $c->getLugar());
        $v0->bindValue(4, $c->getTipo_problema());
        $v0->bindValue(5, $c->getTipo_user());
        $v0->bindValue(6, true);



        $result0 = $v0->execute();


        if ($result0) {
            echo "
            <main>
            <div class='container'>
            <div>
            <p>CADASTRADO COM SUCESSO!</p>
            <div class='botao'>
           <a href='../user.php'><input class='input-button' value='ENVIAR OUTRO CHAMADO' name='botao' type='submit'</a></div>
            </div>
            <div class='space-image'>
            <img src='IMAGES-ICONS/IMAGE-INDEX.svg' alt='Ilustração na qual a personagem usa um computador' width='95%'>
            </div>
            <main>
            </div>";
        } else {
            echo "erro ao cadastrar";
        }
    }





    public function atualizar(chamados $c)
    {
        $sql1 = "update administrador set user_name=?, senha=?";

        $bd = new Conexao();
        $conn = $bd->getConexao();

        $v1 = $conn->prepare($sql1);
        $v1->bindValue(1, $c->getUser_name());
        $v1->bindValue(2, $c->getSenha());
        $result1 = $v1->execute();

        if ($result1) {
            echo "Senha atualizada";
        } else {
            echo "Erro ao atualizar senha";
        }
    }

    public function verificar(chamados $c)
    {
        session_start();

        $sql1 = "select * from administrador where user_name=? and senha=?";
        $bd = new Conexao();
        $conn = $bd->getConexao();

        $v = $conn->prepare($sql1);
        $v->bindValue(1, $c->getUser_name());
        $v->bindValue(2, $c->getSenha());

        $v->execute();
        if ($v->rowCount() > 0) {
            $_SESSION['getUser_name'] = $c->getUser_name();
            header("location:../listarchamados.php");
        } else {
            unset($_SESSION['$getUser_name']);
            echo "Usuário inválido <br> <a href='../login.php'>Volte aqui!</a>";
            /*header("location:index.php");*/
        }
    }

    public function consultarChamados(){
        $sql0 = "select * from chamados where status=1";
        $bd = new Conexao();
        $conn = $bd->getConexao();

        $vl = $conn->prepare($sql0);
        $result = $vl->execute();

        // o método rowCount mostra se as linhas contadas são maiores que 0
        if ($vl->rowCount() > 0) {
            // salva na variável result uma busca e obtenção de daods presentes no banco de dados 
            $result = $vl->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
    }

    public function consultarChamadosResolvidos()
    {
        $sql0 = "select * from chamados where status=0";
        $bd = new Conexao();
        $conn = $bd->getConexao();

        $vl = $conn->prepare($sql0);
        if (!$vl) {
            // Tratar erro na preparação da consulta
            print_r($conn->errorInfo());
            return false;
        }

        $result = $vl->execute();
        if (!$result) {
            // Tratar erro na execução da consulta
            print_r($vl->errorInfo());
            return false;
        }

        if ($vl->rowCount() > 0) {
            $result = $vl->fetchAll(\PDO::FETCH_ASSOC);
            $vl->closeCursor();
            return $result;
        } else {
            // Não há chamados, retornar false
            $vl->closeCursor();
            return false;
        }
    }
}
