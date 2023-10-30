<?php 
include "conexao.php";

class chamadosDao{
    //CRUD - create, read, update, delete
    //create
    public function cadastrar(chamados $c){
        $sql0 = "insert into chamados (cod_chamados, email, desc_problema, lugar, tipo_problema, tipo_user, data_hora ) values (?, ?, ?,?,?,?,?)";
        $sql1 = "insert into administrador (cod_admin, user_name, senha, cod_chamados) values (?, ?, ?, ?)";

        $bd = new Conexao();
        $conn = $bd->getConexao();

        $v0 = $conn->prepare($sql0);
        $v0->bindValue(2, $c->getEmail());
        $v0->bindValue(3, $c->getDesc_problema());
        $v0->bindValue(4, $c->getLugar());
        $v0->bindValue(5, $c->getTipo_problema());
        $v0->bindValue(6, $c->getTipo_user());
        $v0->bindValue(7, $c->getData_hora());

        $v1 = $conn->prepare($sql1);
        $v1->bindValue(1, $c->getCod_admin());
        $v1->bindValue(2, $c->getUser_name());
        $v1->bindValue(3, $c->getSenha());
        $v1->bindValue(4, $c->getCod_chamados());
        


        $result0 = $v0->execute();
        $result1 = $v1->execute();
       

        if($result0 && $result1){
            echo "cadastrado com sucesso";
        }else{
            echo "erro ao cadastrar";
        }
    } //fim cadastrar 


    //read
    public function buscar(chamados $c){
        $sql = "select * from chamados";
        $bd = new Conexao();
        $conn = $bd->getConexao();
           
        $vl = $conn->prepare($sql);
        $vl->bindValue(2, $m->getCod_chamados());
        $vl->execute();
   
       if($vl->rowCount()>0){
        $resultado->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
   }

}

    
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
            echo "Erro ao atualizar";
        }
    }


  
     /*public function apagar(chamados $c){
        $sql0 = "update into chamados  set cod_chamados=?, email=?, desc_problema=?, lugar=?, tipo_problema=?, tipo_user=?, data_hora=?";
        $sql1 = "update into administrador set cod_admin=?, user_name=?, senha=?, cod_chamados=? ";
        $bd = new Conexao();
        $conn = $bd->getConexao();
        
        $v0 = $conn->prepare($sql0);
        $v0->bindValue(1, $m->getCod_chamados());

        $vl = $conn->prepare($sql1);
        $vl->bindValue(1, $m->getCod_admin());

        $result = $vl->execute();

        if($result){
            echo "apagado com sucesso";
        }else{
            echo "erro ao apagar";
        }
    }*/

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

