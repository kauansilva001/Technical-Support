<?php 
include "conexao.php";

class chamadosDao{
    //CRUD - create, read, update, delete
    //create
    public function cadastrar(chamados $c){
        $sql0 = "insert into chamados (email, desc_problema, lugar, tipo_problema, tipo_user) values (?,?,?,?,?)";

        $bd = new Conexao();
        $conn = $bd->getConexao();

        $v0 = $conn->prepare($sql0);
        $v0->bindValue(1, $c->getEmail());
        $v0->bindValue(2, $c->getDesc_problema());
        $v0->bindValue(3, $c->getLugar());
        $v0->bindValue(4, $c->getTipo_problema());
        $v0->bindValue(5, $c->getTipo_user());
        


        $result0 = $v0->execute();
       

        if($result0){
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
        $vl->bindValue(1, $c->getEmail());
        $vl->execute();
   
       if($vl->rowCount()>0){
        $resultado->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
   }

}

    
     public function atualizar(chamados $c){
        $sql0 = "update into chamados  set email=?, desc_problema=?, lugar=?, tipo_problema=?, tipo_user=?";
      
        $bd = new Conexao();
        $conn = $bd->getConexao();
       
        $v0 = $conn->prepare($sql0);
        $v0->bindValue(1, $c->getEmail());
        $v0->bindValue(2, $c->getDesc_problema());
        $v0->bindValue(3, $c->getLugar());
        $v0->bindValue(4, $c->getTipo_problema());
        $v0->bindValue(5, $c->getTipo_user());
        

       
        
      
        $result0 = $v0->execute();
       /*PARAMOS AQUI*/
       
        if($result0){
            echo "atualizado com sucesso";
        }else{
            echo "erro ao atualizar";
        }
    }


  
     public function apagar(chamados $c){
        $sql0 = "update into chamados  set  email=?, desc_problema=?, lugar=?, tipo_problema=?, tipo_user=?";

        $bd = new Conexao();
        $conn = $bd->getConexao();
        
        $v0 = $conn->prepare($sql0);
        $v0->bindValue(1, $m->getCod_chamados());

       

        $result = $vl->execute();

        if($result){
            echo "apagado com sucesso";
        }else{
            echo "erro ao apagar";
        }
    }




}

