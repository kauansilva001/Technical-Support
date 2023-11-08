<?php 
include "conexao.php";

class chamadosDao{
    //CRUD - create, read, update, delete
    //create
    public function cadastrar(chamados $c){
        $sql0 = "insert into chamados (email, desc_problema, lugar, tipo_problema, tipo_user, data_hora ) values (?,?,?,?,?,?)";

        $bd = new Conexao();
        $conn = $bd->getConexao();

        $v0 = $conn->prepare($sql0);
        $v0->bindValue(1, $c->getEmail());
        $v0->bindValue(2, $c->getDesc_problema());
        $v0->bindValue(3, $c->getLugar());
        $v0->bindValue(4, $c->getTipo_problema());
        $v0->bindValue(5, $c->getTipo_user());
        $v0->bindValue(6, $c->getData_hora());

        $result0 = $v0->execute();
       

        if($result0){
            echo "Cadastrado <b>com sucesso</b> :)";
        }else{
            echo "Erro ao cadastrar";
        }
    } //FIM CADASTRAR

    
     public function atualizar(chamados $c){
        $sql1 = "update administrador set user_name=?, senha=?";
      
        $bd = new Conexao();
        $conn = $bd->getConexao();

        $v1 = $conn->prepare($sql1);
        $v1->bindValue(1, $c->getUser_name());
        $v1->bindValue(2, $c->getSenha());
        $result1 = $v1->execute();
       
        if($result1){
            echo "Senha atualizada";
        }else{
            echo "Erro ao atualizar senha";
        }
    }

    public function verificar(chamados $c) {
        session_start();

        $sql1 = "select * from administrador where user_name=? and senha=?";
        $bd = new Conexao();
        $conn = $bd->getConexao();

        $v = $conn->prepare($sql1);
        $v->bindValue(1, $c->getUser_name());
        $v->bindValue(2, $c->getSenha());

        $v->execute();
    if ($v-> rowCount()>0){
        $_SESSION['getUser_name'] = $c->getUser_name();
        echo "Usuário válido";
    }else{
        unset ($_SESSION['$getUser_name']);
        echo "Usuário inválido";
        /*header("location:index.php");*/
    }
 }
}

