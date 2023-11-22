<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../IMAGES-ICONS/support-icon.ico" type="image/x-icon">
    <title>Sistema de chamados</title>
</head>

<body>
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
            <img src='../IMAGES-ICONS/IMAGE-INDEX.svg' alt='Ilustração na qual a personagem usa um computador' width='95%'>
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
        $result0 = $v1->execute();

        if ($result0) {
            echo "Senha atualizada";
        } else {
            echo "Erro ao atualizar senha";
        }
    }

    public function atualizarChamado(chamados $c){ 
        $sql0 = "update chamados set status = false where cod_chamados =?";

        $bd = new Conexao();
        $conn = $bd->getConexao();

        $v1 = $conn->prepare($sql0);
        $v1->bindValue(1, $c->getCod_chamados());
        $result0 = $v1->execute();

        if($result0) {
            header("location:../listarchamados.php");
        }else {
            echo "Não foi possível atualizar o chamado";
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